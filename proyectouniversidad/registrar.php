<?php
session_start();
$email = $_SESSION['usuario'];


if(!isset($email))
{
    header("location: login2.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar</title>
    <link rel="stylesheet" type="text/css" href="css/menus.css">
    <link rel="stylesheet" type="text/css" href="css/iniciar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
</head>
<body>

<!----------------------------------menu------------------------------------------------------->
<header>
        <nav>
            <a href="#" class="enlace">
            <img src="img/logo.png" alt="" class="logo">
            </a>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class = "lista">
                <li class = "listas"><a  href="maestro.php">Inicio</a></li>
                <li class = "listas"><a href="carrerasmaestro.php">Carreras</a></li>
                <li class = "listas"><a href="horarios.php">Horarios</a></li>
                <li class = "listas"><a href="novedadesprofesor.php">Novedades</a></li>
                <li class = "listas"><a class="active" href="registrar.php">Registrar</a></li>
                <li class = "listas"><a href="salir.php">salir</a></li>
                
            </ul>
        </nav>
    </header>





    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="">
        </div>
        <div class="login-container">
            <form action="validarregistro.php"method = "post"  >
                <img class="avatar" src="img/logo.png">
                <h2>Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Nombre completo</h5>
                        <input  name="nombre" id="nombre" class="input" type="text"required >
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>correo electronico</h5>
                        <input  name="correo" id="correo" class="input" type="text"required >
                    </div>
                </div>


                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Contraseña</h5>
                        <input  name="contra" id="contra"class="input" type="password" required>
                    </div>
                </div>
                <input type="radio" name="roles"  value="1" required >profesor
                <input type="radio" name="roles"  value="2" required>estudiante
                <input type="submit" id ="btnvalidar" name="registrar" class="btn" value="Registrar">
            </form>
        </div>
    </div> 
    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/iniciar.js"></script>
</body>
</html>