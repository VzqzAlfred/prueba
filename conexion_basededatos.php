<?php
    //Se conecta el servidor con la variable $conectar 
    $conectar=mysqli_connect('localhost', 'root','','prueba') or 
    die("Problemas en la conexión");


    mysqli_select_db("prueba", $conectar) or 
    die('Problemas en laseleccion base de datos');

    //Recuperamos las variables crando con $ 
    //Y los igualamos con el name que le pusismos en el formulario

    $curp=$_POST["idcurp"];
    $nombre=$_POST['names'];
    $apellidos=$_POST['surname'];
    $direccion=$_POST['direccion'];
    $edad=$_POST['years_old'];
    $email=$_POST['email'];
    $contraseña=$_POST['password'];

    //Hacemos la sentencia sql
    //despues de INTO es EL NOMBRE DE LA TABLA EN PHPHMYADMI
    mysqli_query("INSERT INTO usuario(CURP,Nombre,Apellidos,Direccion,Edad,e-mail,Contraseña) VALUES ('$curp','$names','$surname','$address','$years','$email','$password')",$conectar);

?>