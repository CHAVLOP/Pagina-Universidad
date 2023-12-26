
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>alumno</title>
    <link rel="stylesheet" href="css/carrucelvideo.css">
    <link rel="stylesheet" href="css/menus.css">
    <link rel="stylesheet" href="css/tarjetas.css">
    <link rel="stylesheet" href="css/footer.css">
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
                <li class = "listas"><a  href="inicio.php">Inicio</a></li>
                <li class = "listas"><a href="carreras.php">carreras</a></li>
                <li class = "listas"><a class="active" href="novedades.php">novedades</a></li>
                <li class = "listas"><a  href="login2.php">iniciar sesion</a></li>
                
            </ul>
        </nav>
    </header>  




<div class="container">
        <video src="img/video.mp4" class="slider" autoplay loop muted controls></video>

        <ul>
            
            <li onclick="videoslider('img/video2.mp4')"><video src="img/video2.mp4"></video></li>
            <li onclick="videoslider('img/video3.mp4')"><video src="img/video3.mp4"></video></li>
            <li onclick="videoslider('img/video4.mp4')"><video src="img/video4.mp4"></video></li>
            
            <li onclick="videoslider('img/video6.mp4')"><video src="img/video6.mp4"></video></li>
        </ul>
    </div>


    <script>

        function videoslider(links){
            document.querySelector(".slider").src = links;
        }

    </script>
    <br>
    <br>
    <!-------------------------------------tarjetas------------------------------------>

    
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
                <h2>SOBRE NOSOTROS</h2>
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