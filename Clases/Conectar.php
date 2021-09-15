<?php

    Class conexion{

        private $Servidor = "localhost";
        private $Usuario = "root";
        private $Contraseña= "1234567";
        private $BaseDatos = "db_sira_cornerstone";

        public function conectar(){

            //conecta con el servidor, utilizando la base de datos especificada.
            $conexion = mysqli_connect($this->Servidor,$this->Usuario,$this->Contraseña,$this->BaseDatos);
            
            //regresa la conexion establecida
            return $conexion;
        }

        //recibe una cobnexion
        public function desconectar($conexion){

            //se comprueba que la conexion este abierta, si existe una conexion abierta se cierra.
            if($conexion == true){
                //cerrar la conexion con la base de datos
                mysqli_close($conexion);
                
            }else{
                echo "No se puede cerrar la conexion";
            }
        }



    }
    //
    $objeto = new conexion();

    var_dump($conectado = $objeto->conectar());

    $objeto->desconectar($conectado);


?>