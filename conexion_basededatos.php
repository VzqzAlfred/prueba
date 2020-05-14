<?php
    //Se conecta el servidor con la vaeriable $conectar con el signo de pesos se crean las variables
    $conectar=mysql_connect('localhost', 'root', '');

    //Se verifica si la conexión  (el @ es para que no de errores)

    if(!$conectar){
        echo"No se pudo conectar con el servidor";
    }else{
        $base=mysql_select_db('prueba');
        if(!$base){
            echo"No se encontro la base de datos";
        }
    }

    //Recuperamos las variables crando con $ 
    //Y los igualamos con el name que le pusismos en el formulario

    $curp=$_POST["idcurp"];
    $nombre=$_POST['name'];
    $apellidos=$_POST['surname'];
    $direccion=$_POST['direccion'];
    $edad=$_POST['years_old'];
    $email=$_POST['email'];
    $contraseña=$_POST['password'];

    //Hacemos la sentencia sql
    //despues de datos es EL NOMBRE DE LA TABLA EN PHPHMYADMI
    $sql="INSER INTO usuario VALUES('$nombre', 
                                    '$nombre', 
                                    '$apellidos', 
                                    '$direccion', 
                                    '$edad', 
                                    '$email', 
                                    '$contraseña')";


    //Ejecutamos la sentencia de sql
    $ejecutar=mysql_query($sql);

    //Y finalmente se verifica la ejecución 
    if(!$ejecutar){
        echo"Hubo algún error.";
    }else{
        echo"Datos guardados exitosamente <br> <a href='#'> Volver </a>";
    }
?>