function validate(e){
    e.preventDefault();
    formulario  = document.getElementById('frmUsuario');
    nombre      = document.getElementById('txtNombre');
    apellido    = document.getElementById('txtApellido');
    usuario     = document.getElementById('txtUsuario');
    clave       = document.getElementById('txtClave');
    
    lVali = true;
    
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar el apellido...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el usuario...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la clave...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

}
function validateModify(e){
    e.preventDefault();
    formulario  = document.getElementById('frmUsuarioModificar');
    nombre      = document.getElementById('txtNombreM');
    apellido    = document.getElementById('txtApellidoM');
    usuario     = document.getElementById('txtUsuarioM');
    clave       = document.getElementById('txtClaveM');
    
    lVali = true;
    
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar el apellido...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el usuario...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la clave...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

}
