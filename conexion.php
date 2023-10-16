<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=db', 'db', 'AVNS_gJakkJxzypCA5wlJ7tb');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>
