<?php
	
		$email= $_POST['email'];
		$password = $_POST['password'];
        session_start();
		$_SESSION['email'] = $email;
		$_SESSION ['usuario']=$email;
	    $conexion= mysqli_connect('localhost','root','','universidad');

	    $consulta = "SELECT * FROM  usuarios WHERE email = '$email' and contraseña = '$password' ";
	    $resultado = mysqli_query($conexion,$consulta);

	    $filas = mysqli_fetch_array($resultado);
		if ($filas['id_roles']==1)
	    {
			$_SESSION ['usuario']=$email;
		    header ("location:maestro.php");
	    }
		else
		{
			echo "<script>alert('No se encontro el profesor');</script>";
			include ("location:login.php");
			
			 
		}