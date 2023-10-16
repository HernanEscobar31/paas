<?php
    
    try{
         $conexion = new PDO('mysql:host=http://104.248.118.220/;dbname=prueba', 'root', 'root1234');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>
