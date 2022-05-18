<?php

require_once '../../controller/user.controller.php';
require_once '../../model/dao/user.dao.php';
require_once '../../model/dto/user.dto.php';
require_once '../../model/conexion.php';

class Reporte{

    private $pdf;
    
    public function __CONSTRUCT(){
        include 'vendor/fpdf.php';
        $this -> pdf = new FPDF();
        $this -> pdf -> AddPage();
    }

    public function headReport(){
        // Logo
        $this->$pdf->Image('../img/amjo.jpg',10,8,33);
        // Arial bold 15
        $this->$pdf->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->$pdf->Cell(80);
        // Título
        $this->$pdf->Cell(30,10,'Title',1,0,'C');
        // Salto de línea
        $this->$pdf->Ln(20);
    }

    public function viewAll(){
        
        
        $pdf->AddPage();
        $this -> $pdf->SetFont('Arial','B',16);
        
        

        try {
            $objDtoUser = new User();
            $objDaoUser = new UserModel($objDtoUser);
            $respon = $objDaoUser -> mldSearchAllUser()->fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the 
            controller of show all " . $e->getMessage();
        }

        $fila = 10;
        foreach ($respon as $key => $value){

            $pdf->Cell(40,10,$value['NAME']);
                        
            $this->pdf->Ln(10);
        } 

    }
    
    function footReport(){
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        
        $this->$pdf->Output();
    }

}//FIN CLASE


$objView = new Reporte();
$objView -> headReport();
$objView -> viewAll();
$objView -> footReport();

?>
