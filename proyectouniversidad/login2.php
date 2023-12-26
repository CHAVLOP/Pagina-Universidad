<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/logeo.css">
    <link rel="stylesheet" href="css/menus.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<!-------------------------------------------menu------------------------------------------->
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
                <li class = "listas"><a  href="inicio.php">Inicio</a></li>
                <li class = "listas"><a  href="carreras.php">Carreras</a></li>
                <li class = "listas"><a href="novedades.php">Novedades</a></li>
                <li class = "listas"><a class="active" href="login2.php">iniciar sesion</a></li>
                
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <br>


<!---------------------------------------------------------formulario------------------------------------->
  
<div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="img/estudiantes.jpg" alt="">
        <div class="text">
          <span class="text-1"> <br> </span>
          <span class="text-2"></span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="img/profesor1.jpg" alt="">
        <div class="text">
          <span class="text-1"> <br> </span>
          <span class="text-2"></span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">estudiante</div>
          <form action="validarestudiante.php"method ="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text"name="matricula" placeholder="correo" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="contraseña" required>
              </div>
              
              <div class="button input-box">
                <input type="submit" value="iniciar">
               
                
                
              </div>
              
              <div class="text sign-up-text">eres un profesor? <label for="flip">inicia sesion</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">profesor</div>
        <form action="validarprofesor.php"method ="post">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="correo" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="contraseña" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Iniciar">
              </div>
              <div class="text sign-up-text">eres un estudiante? <label for="flip">inicia sesion</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
 
    
</body>
</html>