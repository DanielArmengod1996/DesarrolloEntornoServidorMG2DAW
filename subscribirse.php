<?php
	
	$nombre 			= $_POST["nombre"];
	$dni 				= $_POST["dni"];
	$edad 				= $_POST["edad"];
	$direccionCorreo 	= $_POST["direccionCorreo"];
	
	
	$sql = 'INSERT INTO usuarios( nombre, dni, edad, correo ) VALUES( ? , ? , ? , ? )';
	
	$parametros = Array( $nombre, $dni, $edad, $direccionCorreo );
	
    $conexion = new mysqli('localhost', 'root', '', 'correos');
	if (mysqli_connect_errno()) {
        printf("Error de conexion ", mysqli_connect_error());
		exit();
	}

    if (mysqli_connect_errno()) {
        printf("Error de conexion ", mysqli_connect_error());
        exit();
		
	} else if ($sql != null || $sql != '') {

	$sentencia = $conexion->prepare($sql);
        
	if (!empty($parametros)) {
		$tipos = "";
        
		foreach ($parametros as $parametro) {
		if (gettype($parametro) == "string")            
			$tipos = $tipos . "s";        
		else
			$tipos = $tipos . "i";
			}
            $sentencia->bind_param($tipos, ...$parametros);
		}

		$sentencia->execute();
        $sentencia->close();
        $conexion->close();
	}
	
	header('Location: mostrarRSS.php');
	
?>