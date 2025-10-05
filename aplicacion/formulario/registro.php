<?php
$link = mysqli_connect("localhost","root","");
//$db = mysqli_select_db("formulario",$link) or die("<h2>Error de Conexion<h2>");
$dbname="formulario";
$db=mysqli_select_db($link, $dbname);
//obtenemos los valores del formulario
$nombres = $_POST['nombreuser'];
$apellidos = $_POST['apellidouser'];
$email = $_POST['emailuser']; 
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];

//Obtiene la longitud de un string
$req = (strlen("$nombres")*strlen("$apellidos")*strlen("$email")*strlen("$pass")*strlen("$rpass")) or die("No se han llenado todos los campos");
//se confirma la contraseña
if ($pass !=$rpass) {
	die('Las contraseñas no coiciden, Verifique <br /> <a href ="Mi_pagina_web.html">Volver</a>');
}
//se encripta la contraseña
$passuser = md5($pass);

//ingresamos la informacion a la base de datos
//mysqli_query("INSERT INTO datos VALUES('$id','$nombres','$apellidos','$email','$passuser')",$link) or die ("<h1>Error Guardando los datos</h2>");
$consulta="INSERT INTO datos VALUES('','$nombres','$apellidos','$email','$passuser')";
$resul=mysqli_query($link,$consulta);
if(!$resul){echo "no se ejecuto";}
echo'
     <script>
      alert("Registro Exitoso");
      location.href="Mi_pagina_web.html";
     </script>
'


?>
