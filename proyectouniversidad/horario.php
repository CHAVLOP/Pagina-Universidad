<?php
session_start();
$email = $_SESSION['usuario'];


if(!isset($email))
{
    header("location: login2.php");
}
?>
<!DOCTYPE html>

<?php
include('conexion.php');

$tmp = array();
$res = array();

$sel = $con->query("SELECT * FROM files");
while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/menus.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
                <li class = "listas"><a  href="alumno.php">Inicio</a></li>
                <li class = "listas"><a class="active" href="horario.php">Horarios</a></li>
                <li class = "listas"><a href="novedadesestudiante.php">Novedades</a></li>
                <li class = "listas"><a href="carrerasestudiante.php">Carreras</a></li>
                <li class = "listas"><a href="salir.php">salir</a></li>
                
                
            </ul>
        </nav>
    </header>






<!--------------------------------------tabla------------------------------------------------------------------->

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <h1>Subir Archivos</h1>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-8">
                   

                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">titulo</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($res as $val) { ?>
                                <tr>
                                    <td class = "table__item_link" ><?php echo $val['id'] ?> </td>
                                    <td><?php echo $val['title'] ?></td>
                                    <td><?php echo $val['description'] ?></td>
                                    <td>
                                        
                                        <a class="btn btn-primary" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/proyectouniversidad/' . $val['url']; ?>" >Ver Archivo en pagina</a>
                                        
                                        
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script>
                            function onSubmitForm() {
                                var frm = document.getElementById('form1');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                            alert(msg);
                                            $('#exampleModal').modal('hide')
                                        } else {
                                            alert(msg);
                                        }

                                    }
                                };
                                xhttp.open("POST", "upload.php", true);
                                xhttp.send(data);
                                $('#form1').trigger('reset');
                            }
                            function openModelPDF(url) {
                                $('#modalPdf').modal('show');
                                $('#iframePDF').attr('src','<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/uploadfile/'; ?>'+url);
                            }
        </script>
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
