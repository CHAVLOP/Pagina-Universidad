<?php
session_start();
$email = $_SESSION['usuario'];


if(!isset($email))
{
    header("location: login2.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>estudiante</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/menus.css">
    <link rel="stylesheet" href="css/tarjetas.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>


 <!----------------------------------menu----------------------------------------->
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
                <li class = "listas"><a class="active" href="alumno.php">Inicio</a></li>
                <li class = "listas"><a href="horario.php">Horarios</a></li>
                <li class = "listas"><a href="novedadesestudiante.php">Novedades</a></li>
                <li class = "listas"><a href="carrerasestudiante.php">Carreras</a></li>
                <li class = "listas"><a href="salir.php">salir</a>
                
            </li>
                
            </ul>
        </nav>
    </header>  


     <!-- Swiper -->
  <div class="swiper-container">

        <div class="swiper-wrapper">

          <div class="swiper-slide"><img src="img/directores.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/inclusion.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/maiz1.jpg" alt=""></div>
          

        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

      </div>
    
<!-- Scripts -->
<script src="js/swiper.min.js"></script>
<script src="js/app.js"></script>

<!-------------------------------------tarjetas------------------------------------>

<br>
<br>
<main>
    <center><h1>filosofia institucional</h1></center>
        <div class="container__card">
            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img/logo2.png);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h1>mision</h1>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <h1>mision</h1>
                            <p>somos una universidad comprometida con el desarrollo humano, que forma integralmente a personas con un modelo educativo basado en competencias dentro de un ambiente de mejora continua, con la finalidad de propiciar el desenvolvimiento de la mentefactura para elevar el nivel de calidad de vida de nuestro entorno</p>
                            <input type="button" value="Leer Más">
                        </div>
                    </div>
                </div>
            </div>


            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img/logo2.png);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h1>vision</h1>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <h1>vision</h1>
                            <p>Ser una universidad reconocida a nivel nacional e internacional por la solida formacion integral de quien egrese, la calidad academica y profesional de su personal, la certificacion de sus procesos y programas, que contribuye al desarrollo social, tecnologico y economico del pais  </p>
                            <input type="button" value="Leer Más">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
<br>
<br>



<!--Iconos--------------------------------------------footer---------------------------->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
<!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/logo.png" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
            <p>somos una universidad en medio de la nada</p>
                <p class="fas fa-location-arrow">Carretera Irapuato - La Piedad Km. 44, Predio El Derramadero. Penjamo, Guanajuato. C.P. 36921</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/PolitecnicaDePenjamo" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/correcaminosuppe/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/channel/UCsO94XCH4yMitlNFhtobjMA" class="fa fa-youtube"></a>
                    <a href="desarrollo.php" class="fas fa-address-card"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2021 <b>LaCotorrisa</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>