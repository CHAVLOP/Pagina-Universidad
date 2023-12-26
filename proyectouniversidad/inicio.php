
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menus.css">
    <link rel="stylesheet" href="css/tarjetas.css">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/carrucel.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>inicio</title>
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
                <li class = "listas"><a class="active" href="#">Inicio</a></li>
                <li class = "listas"><a href="carreras.php">Carreras</a></li>
                <li class = "listas"><a href="novedades.php">Novedades</a></li>
                <li class = "listas"><a href="login2.php">iniciar sesion</a></li>
                
            </ul>
        </nav>
    </header>
   <!-------------------------------------------carrucel-------------------------------------->
   <div class="slide-contenedor">
        <div class="miSlider fade">
            <img src="img/primera.png" alt="">
        </div>
        <div class="miSlider fade">
            <img src="img/compu.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="img/imagen8.jpg" alt="">
        </div>
        <div class="direcciones">
            <a href="#" class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
            <a href="#" class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
        </div>
        <div class="barras">
            <span class="barra active" onclick="posicionSlide(1)"></span>
            <span class="barra" onclick="posicionSlide(2)"></span>
            <span class="barra" onclick="posicionSlide(3)"></span>
        </div>
    </div>
    <script src="js/main.js"></script>
    <!-------------------------------------tarjetas-------------------------------------------->
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

<!-----------------------------------------------galeria-------------------------------------->
    <div class="galeria">
        <h1>Galeria</h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="img/1.jpg" alt="">
                <div class="overlay">
                    <h2>concurso de la carrera ISW</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/2.jpg" alt="">
                <div class="overlay">
                    <h2>concurso carrera ILT</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/3.jpg" alt="">
                <div class="overlay">
                    <h2>directores</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/4.jpeg" alt="">
                <div class="overlay">
                    <h2>eventos academicos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/5.jpg" alt="">
                <div class="overlay">
                    <h2>institucion</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/6.jpg" alt="">
                <div class="overlay">
                    <h2>alumnos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/7.jpg" alt="">
                <div class="overlay">
                    <h2>alumnos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/8.jpg" alt="">
                <div class="overlay">
                    <h2>alumnos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="img/logo2.png" alt="">
                <div class="overlay">
                    <h2>logo oficial</h2>
                </div>
            </div>
            
        </div>
    </div>

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