<?php
$link = mysqli_connect("localhost","root","");
//$db = mysqli_select_db("formulario",$link) or die("<h2>Error de Conexion<h2>");
$dbname="formulario";
$db=mysqli_select_db($link, $dbname);
//obtenemos los valores del formulario
$nombre = $_POST['producto'];
$precio = $_POST['precio'];





//ingresamos la informacion a la base de datos
//mysqli_query("INSERT INTO datos VALUES('$id','$nombres','$apellidos','$email','$passuser')",$link) or die ("<h1>Error Guardando los datos</h2>");
$cargar="INSERT INTO productos VALUES('','$nombre','$precio')";
$resul=mysqli_query($link,$cargar);



echo'
     <script>
      alert("Registro Exitoso");
      location.href="productos.html";
     </script>
'


?>
