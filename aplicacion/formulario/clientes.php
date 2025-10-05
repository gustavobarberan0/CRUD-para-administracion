<?php
$link = mysqli_connect("localhost","root","");
//$db = mysqli_select_db("formulario",$link) or die("<h2>Error de Conexion<h2>");
$dbname="formulario";
$db=mysqli_select_db($link, $dbname);
//obtenemos los valores del formulario
$idcliente = $_POST['idcliente'];
$nya = $_POST['nya'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];




//ingresamos la informacion a la base de datos
//mysqli_query("INSERT INTO datos VALUES('$id','$nombres','$apellidos','$email','$passuser')",$link) or die ("<h1>Error Guardando los datos</h2>");
$cargar="INSERT INTO clientes VALUES('','$nya', '$domicilio', '$telefono')";
$resul=mysqli_query($link,$cargar);



echo'
     <script>
      alert("Registro Exitoso");
      location.href="clientes.html";
     </script>
'


?>