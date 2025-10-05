<?php
//obtenemos los valores del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];



//conectar a la bd y servidor
$link = mysqli_connect("localhost","root","");
//$db = mysqli_select_db("formulario",$link) or die("<h2>Error de Conexion<h2>");
$dbname="formulario";
$db=mysqli_select_db($link, $dbname);
$consulta = "SELECT * FROM productos";

$resultado = mysqli_query($link,$consulta) or die ("<h2>Error de Conexion<h2>");
?>
<select> name="productos"</select>
<?php
while( $row = sqlsrv_fetch_array( $db, $resultado) ) {
      echo $row['nombre'].", ".$row['precio']."<br />";
}

/*Obtiene la longitud de un string para verificar que no haya campos vacios
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
  */

 ?>