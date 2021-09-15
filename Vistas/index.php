<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ingreso-Cornerstone</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/untitled-1.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
    <link rel="icon" href="../imagenes\descarga.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

    <!--dependencias necesarias para validar campos vacios del formulario-->
    <script src= "../assets/js/Funciones.js"></script>
    <script src="../assets/bootstrap/js/jquery-3.6.0.min.js"></script>

</head>  
<body>

    <form class="formulario" id = "frmregistro">
    
        <div class = "circulo">
            <img src="../imagenes/descarga.ico" class="imagen">
        </div>
        <h1 >Cornerstone</h1>
        <div class="contenedor">
        
            
            <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" placeholder="Usuario">
            
            </div>
            
            <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña">
            
            </div>
            
            <a class="nav-link" href="profile.html">Inicio</a>
            <button type="submit" value="Entrar" class="button" id="registro">Ingresar</span>
            
        </div>
    </form>
  

          
</body>
</html>
 
<script type = "text/javascript">

    
    $(document).ready(function(){

        //al presionar click en el boton de registro
        $('#registro').click(function(){

            vacios = validarFormVacio('frmregistro');

            //si los campos de textos son vacios
            if(vacios > 0){

                //aviso de error
                alert("Debes llenar todos los campos ");
                
                return false;
            }

            //crear cadena dinamica con serialize
            datos=$('#frmregistro').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"../Procesos/RegLogin/RegistrarUsuario.php",
                success:function(r){

                }
            });

        });

    });

</script>