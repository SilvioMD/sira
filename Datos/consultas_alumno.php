<?php

     include 'abrir_conexion.php';

    //consulta con transact sql
     $cons_sql = "SELECT * FROM alumno";
    
     //almacenamiento de resultado de la consulta
     $resultado = $coneccion->query($cons_sql);

    if($resultado->num_rows > 0){

        //obtener elementos del objeto
        while($fila = $resultado->fetch_assoc()){
            ?>
            
            <td><?php echo $fila['id_alumno'];?></td>
            <td><?php echo $fila['pnombre_a'];?></td><br/>
            <td><?php echo $fila['snombre_a'];?></td><br/>
            <td><?php echo $fila['papellido_a'];?></td><br/>
            <td><?php echo $fila['sapellido_a'];?></td><br/>
            
            <?php
        }
        
     }else{

        echo "la consulta no se realizo correctamente";
     }

     include 'cerrar_conexion.php';
?>