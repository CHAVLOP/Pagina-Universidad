
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
    <title>carreras</title>
    
    <script src="scripts.js" defer></script>
    <link rel="stylesheet" href="css/nuevo.css" >
    <link rel="stylesheet" href="css/menus.css" >
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/footer.css" >
      <link rel="stylesheet" href="css/carrerastarjetas.css" >
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                <li class = "listas"><a  href="maestro.php">Inicio</a></li>
                <li class = "listas"><a class="active" href="carrerasmaestro.php">Carreras</a></li>
                <li class = "listas"><a  href="horarios.php">horarios</a></li>
                <li class = "listas"><a href="novedadesprofesor.php">Novedades</a></li>
                <li class = "listas"><a href="registrar.php">registrar</a></li>
                
                <li class = "listas"><a href="salir.php">salir</a></li>
                
            </ul>
        </nav>
    </header>


<!-------------------------------------------------slider----------------------------------->
<div class="slideshow-container">

<div class="mySlides fade">
<div class="numbertext"></div>
<img class = "imagenes"src="img/ganadores.jpg" >
<div class = "texto">
    <div class="text">Ganadores del tercer lugar carrera ingenieria en software</div>
</div>
</div>

<div class="mySlides fade">
<div class="numbertext"></div>
<img class = "imagenes" src="img/expo.jpg" >
<div class="text">alumnos de agroindustrial en la expo agromentaria</div>
</div>

<div class="mySlides fade">
<div class="numbertext"></div>
<img class = "imagenes" src="img/maiz.jpg" >
<div class="text">exposicion del dia del maiz</div>
</div>

<!-- Las Flechas -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<!-- Los puntos -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span> 
<span class="dot" onclick="currentSlide(2)"></span> 
<span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script >
    // Variable que controlar cual imagen se despliega
var slideIndex = 1;

// Función que muestra la imagen actual
showSlides(slideIndex);

// Función que muestra el slide de acuerdo al numero indicado
function plusSlides(n) 
{
showSlides(slideIndex += n);
}

// Función que actualiza la imagen
function currentSlide(n) 
{
showSlides(slideIndex = n);
}

// Función que muestra la imagen
function showSlides(n) 
{
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}    
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) 
{
    slides[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) 
{
    dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
}
</script>
    
<br>
<br>
<br>
<br>

<!----------------------------------------------tarjetas------------------------------------------------------------>
<center><h1>nuestras carreras</h1></center>
<div class="card-container">
        <div class="card">
            <div class="imgBx">
                <img src="img/administracion.jpg" alt="">
                <h4>administracion y gestion empresarial</h4>
            </div>
            <div class="content">
                <h2>LAG</h2>
                <p>- ¿Te gustaría trabajar en asesoría y desarrollo empresarial, recursos humanos, producción, sistema de calidad, contabilidad, evaluación financiera, consultoría, comercio exterior, mercadotecnia y ventas?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/agro.jpg" alt="">
                <h4>ingenieria agroindustrial</h4>
            </div>
            <div class="content">
                <h2>IAG</h2>
                <p>- ¿Te gustaría trabajar aplicando tus conocimientos en la industria, organismos públicos, áreas de investigación docencia y puede desempeñarse en el sector productivo y/o empresas tales como: Vinícolas, lácteos, cerveceras, cárnicos, frutas, hortalizas, cereales y oleaginosa, así como en la agricultura protegida (invernaderos) de igual manera en la creación de su propia empresa?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/automotriz.jpg" alt="">
                <h4>ingenieria automotriz</h4>
            </div>
            <div class="content">
                <h2>INA</h2>
                <p>¿Te gustaría trabajar desempeñándote en cualquier área relacionada con la industria automotriz, de maquinaria pesada, equipo agroindustrial y metal-mecánica, en investigación del producto, diseño y desarrollo, en asesoría, servicio técnico especializado, mantenimiento y fabricación de piezas automotrices?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/bio.jpg" alt="">
                <h4>ingenieria en biotegnologia</h4>
            </div>
            <div class="content">
                <h2>IBT</h2>
                <p>¿Te gustaría trabajar dentro de un proceso tradicional su función consistirá en implementar operaciones sustentables por ejemplo sustituir un insecticida que daña el ambiente por uno diseñado con elementos naturales como vegetales, sustituir procesos químicos de producción de fármacos por procesos biotecnológicos de biofármacos o bien eliminar conservadores de los alimentos conservados, trabajar intensamente siguiendo las rutas marcadas por la naturaleza?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/industrial.jpg" alt="">
                <h4>ingenieria industrial</h4>
            </div>
            <div class="content">
                <h2>IND</h2>
                <p>- ¿Te gustaría dirigir los procesos de mejora continua de la productividad, tomando en cuenta el entorno productivo y el cuidado al medio ambiente, con las habilidades y competencias necesarias para encontrar la mejor alternativa de solución posible, que mejore el desempeño de un proceso productivo de cualquier tipo, tanto en la industria de la transformación, como en la industria de los servicios?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/logistica.jpg" alt="">
                <h4>Ingenieria en logistica y transporte</h4>
            </div>
            <div class="content">
                <h2>ILT</h2>
                <p>- ¿Te gustaría trabajar realizando funciones gerenciales y de dirección de empresas de transporte de carga para el manejo y distribución de mercancías, seleccionando estratégicamente las rutas más adecuadas para el traslado de las mercancías mediante modelos logísticos, optimizando las actividades logísticas de la empresa a través del análisis de costos, desarrollo de proveedores y administrando inventarios desde el punto de origen al punto destino?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/mecatronica.jpg" alt="">
                <h4>ingenieria en mecatronica</h4>
            </div>
            <div class="content">
                <h2>IME</h2>
                <p>- ¿Te gustaría trabajar en ámbitos relacionados con la mecánica de precisión, los sistemas de control electrónicos y los sistemas de información computarizados, diseñando, controlando e implantando dichos sistemas, que va desde la automatización de operaciones en microempresas hasta la completa automatización y control de líneas de producción, desde el diseño de productos sencillos de uso cotidiano hasta el diseño de sofisticados equipos con tecnología de punta?</p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/7.jpg" alt="">
                <h4>ingenieria en software</h4>
            </div>
            <div class="content">
                <h2>ISW</h2>
                <p>- ¿Te gustaría trabajar en empresas donde se requiera el desarrollo e implementación de Proyectos de Software a gran escala; Consultoría, Auditoría y Peritaje; Investigación aplicada; Gestión de proyectos de software; Soporte técnico y estratégico a la infraestructura de tecnologías de información; Sistemas de software; Innovación y desarrollo tecnológico y reingeniería de procesos?</p>
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
