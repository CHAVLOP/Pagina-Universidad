<?php
session_start();
$conexion= mysqli_connect('localhost:3307','root','','universidad');

if (isset($_POST['registrar']))
	{
		
		$correo = $_POST['correo'];
		$nombre = $_POST['nombre'];
		$contra = $_POST['contra'];
		$roles = $_POST['roles'];

		$query  = "INSERT INTO usuarios (nombre,email,contraseña,id_roles) VALUES ('$nombre','$correo','$contra','$roles')";
		$query_run = mysqli_query($conexion,$query);

		if ($query_run)
		{
			$_SESSION['status']="exelente";
			echo "<script>alert('se registro correctamente')</script>";
			header ("location:registrar.php");
		}
		else
		{
			echo "<script>alert('error')</script>";
		}
	}
	?>