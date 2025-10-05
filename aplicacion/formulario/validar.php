<?php
//obtenemos los valores del formulario
$email = $_POST['emailuser'];
$pass = $_POST['pass'];

//se encripta la contraseña
$passuser = md5($pass);

//conectar a la bd y servidor
$link = mysqli_connect("localhost","root","");
//$db = mysqli_select_db("formulario",$link) or die("<h2>Error de Conexion<h2>");
$dbname="formulario";
$db=mysqli_select_db($link, $dbname);
$consulta = "SELECT * FROM datos WHERE email = '$email' and password = '$passuser'";
$resultado = mysqli_query($link,$consulta) or die ("<h2>Error de Conexion<h2>");

//Obtiene la longitud de un string para verificar que no haya campos vacios
$req = (strlen($email)*strlen($pass)) or die ("No se han llenado todos los campos");

//busca si existe registro
$filas = mysqli_num_rows($resultado);

if ($filas>0){
	header("location:bienvenido.html");
}
else {
	header("location:login.html");
}
  mysqli_free_result($resultado);
  mysqli_close($link);
  

 ?>