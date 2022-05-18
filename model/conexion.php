<?php
    class Conexion{
        private $host;
        private $drive;
        private $base;
        private $user;
        private $pass;
        private $url;
        private $charSet;
        
        /*constructor */
        public function __construct(){
            $this -> host   ="localhost";
            $this -> drive  ="mysql";
            $this -> base   ="adsi56";
            $this -> user   ="root";
            $this -> pass   ="";
            $this -> url    = $this -> drive . ":host=" 
                            . $this -> host . ";dbname=" 
                            . $this -> base;
            $this -> charSet="UTF8";
        }//END CONSTRUCT
        public function getConect(){
            try {

                $con = new PDO($this -> url, $this -> user, $this -> pass);

            } catch (Exception $e) {
                
                echo "Error al conectarme " . $e->getMessage();

            }//END TRY
            return $con;
        }//END GETCONECT
    }//END CLASS
    //$objCon = new Conexion();
    //$objCon -> getConect();
?>