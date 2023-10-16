<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);
        
        function conectar_PostgreSQL( $usuario, $pass, $host, $bd, $port )
    {
        $conexion = pg_connect( "user=".$usuario." ".
                                "password=".$pass." ".
                                "host=".$host." ".
                                "dbname=".$bd." ".
                                "port=".$port

                              ) or die( "Error al conectar: ".pg_last_error() );

        return $conexion;
    }
        
        $statement = $conexion->prepare('
        SELECT * FROM login WHERE usuario = :usuario AND clave = :clave'
        );
        
        $statement->execute(array(
            ':usuario' => $usuario,
            ':clave' => $clave
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            header('location: principal.php');
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }
    
require 'frontend/login-vista.php';


?>
