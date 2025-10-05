<?php
    $conexion = mysqli_connect("localhost", "root", "", "electrodomesticos");
    $num_cliente = $_POST["num_clienteuser"];
    $dni = $_POST["dniuser"];
    $nombre = $_POST["nombreuser"];
    $apellido = $_POST["apellidouser"];
    $telefono = $_POST["telefonouser"];
    

    $insertar = "INSERT INTO cliente(num_cliente, dni, nombre, apellido, telefono) VALUES ('$num_cliente', '$dni', '$nombre',
    '$apellido', '$telefono')";

    $resultado = mysqli_query($conexion, $insertar);
    if (!$resultado) {
        echo '<script>
            ("Error al registrarse")
            
        
             </script>'
    } else {
        echo '<script>
        ("Usuario registrado exitosamente")
       
        </script>'
    }

    mysqli_close($conexion)


    








?>