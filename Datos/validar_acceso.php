<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type ="text/css" href="../Capa de Aplicacion/style_tabla.css">
	
    </head>
    <body>
        <h1>TABLA USUARIOS</h1>
        <table>
            <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                
            </tr>
        </table>
    </body>
</html>

<?php

    include 'abrir_conexion.php';

     //consulta con transact sql
     $cons_sql = "SELECT * FROM cuenta";
    
     //almacenamiento de resultado de la consulta
     $resultado = $coneccion->query($cons_sql);
    
     if($resultado->num_rows > 0){

        //obtener elementos del objeto
        while($fila = $resultado->fetch_assoc()){
            ?>
            
            <td><?php echo $fila['usuario'];?></td>
            <td><?php echo $fila['contraseña'];?></td><br/>

            <?php
        }
        
     }else{

        echo "la consulta no se realizo correctamente";
     }

    include 'cerrar_conexion.php';
    
?>