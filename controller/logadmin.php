<?php

	session_start();
	require_once ("../model/conexion.php"); //----conexion a la BD
	    //para iniciar sesión
		
		// Buscar usuario en base de datos
		//PARA ENTRAR EN TIPO ADMINISTRADOR
		//USUARIO: ADMIN
		//CONTRA: admin
		if(!empty($_POST)) {
			$usuario = mysqli_real_escape_string($conexion, $_POST['email_']);
			$encriptar = mysqli_real_escape_string($conexion, $_POST['password_']);
			$contrasenia = sha1($encriptar);
			$consulta = "SELECT * FROM estudiantes WHERE codigo = '$usuario' AND contrasenia = '$contrasenia' AND tipo = '1' AND estado = '1'";
			$resultado = $conexion -> query($consulta);
			$filas = $resultado -> num_rows;
			if($filas > 0){
				$fila = $resultado -> fetch_assoc();
				$_SESSION['id_empleado'] = $fila["codigo"];
				// si no inicia sesion que lo mande al index
		
				if(!isset($_SESSION['id_empleado'])){
					header("Location: index.php ");
				}else{
					//si no que lo mande a reporte de empleado
					header("Location: ../view/reporteEmp.php");
				}
			}else{
				$mensaje = 'usuario o contrasenia incoreccto';
				echo "<script type='text/javascript'>alert('$mensaje');</script>";
				// si es incorrecto algun campo
			}
		}
?>

$correo = $_POST['email_'];//llama correo y se guarda en la variable
		$Pass = $_POST['password_'];