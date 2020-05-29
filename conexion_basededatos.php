<?php
    //conexión con la base de datos y el servidor.
    $link = mysql_connect("localhost","root","") or die ("<h2> No se encuentra el servidor </h2>");
    $db = mysql_select_db("prueba",$link) or die ("<h2> Error de conexión </h2>");

    //obtenemos los valores del formulario
    $curp=$_POST['idcurp'];
    $name=$_POST['names'];
    $apellido=$_POST['surname'];
    $direccion=$_POST['direccion'];
    $edad=$_POST['years_old'];
    $correo=$_POST['email'];
    $contraseña=$_POST['password'];
    

    //Obtiene la longitud de un string
    $req = (strlen($curp)*strlen($name)*strlen($apellido)*strlen($direccion)*strlen($edad)*strlen($correo)*strlen($contraseña)) or die ("No se han llenado todos los campos <br><br><a href='index.html'>");

    mysql_query("INSERT INTO datos VALUES ('','$curp','$name','$apellido','$direccion','$edad','$correo','$contraseña')", $link) or die ("<h2>Error de envío</h2>");

    echo '
        <h2>Registro Completo</h2>
        <h5>Gracias por regustrate y blah, blah blah</h5>
        <a href="index.html"> logearse </a>
    ';
?>