<?php
    
    try{
         $conexion = new PDO('mysql:host=app-bb69b715-1dd4-4374-b5b5-dc9b8529f414-do-user-14722467-0.b.db.ondigitalocean.com;dbname=db', 'db', 'AVNS_gJakkJxzypCA5wlJ7tb');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>
