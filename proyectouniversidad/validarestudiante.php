<?php
		$matricula= $_POST['matricula'];
		$password = $_POST['password'];
        session_start();
		$_SESSION['matricula'] = $matricula;
		$_SESSION ['usuario']=$matricula;
	    $conexion= mysqli_connect('localhost','root','','universidad');

	    $consulta = "SELECT * FROM  alumnos WHERE matricula = '$matricula' and contraseña = '$password' ";
	    $resultado = mysqli_query($conexion,$consulta);

	    $filas = mysqli_fetch_array($resultado);

	    if ($filas['id_rol']==2)
	    {
			$_SESSION ['usuario']=$matricula;
		    header ("location:prueba.php");
	    }
		else
		{
			 echo '<script>alert("No se encontro el estudiante")</script>';
			 header("location:login.php");

            
		}

///-----------------------------------------VALIDAR MAESTRO----------------------------------//
		$email= $_POST['email'];
		$password = $_POST['password'];
        session_start();
		$_SESSION['email'] = $email;
		$_SESSION ['usuario']=$email;
	    $conexion= mysqli_connect('localhost:3307','root','','universidad');

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
///------------------------------------VALIDAR ADMINISTRADOR----------------------------------//
		$email= $_POST['email'];
		$password = $_POST['password'];
        session_start();
		$_SESSION['email'] = $email;
		$_SESSION ['usuario']=$email;
	    $conexion= mysqli_connect('localhost:3307','root','','universidad');

	    $consulta = "SELECT * FROM  usuarios WHERE email = '$email' and contraseña = '$password' ";
	    $resultado = mysqli_query($conexion,$consulta);

	    $filas = mysqli_fetch_array($resultado);
		if ($filas['id_roles']==3)
	    {
			$_SESSION ['usuario']=$email;
		    header ("location:administrador.php");
	    }
		else
		{
			echo "<script>alert('No se encontro el profesor');</script>";
			include ("location:login.php");
			
			 
		}
