
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

    


session_start();
$email = $_SESSION['usuario'];


if(!isset($email))
{
    header("location: login2.php");
}

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
                <li class = "listas"><a class="active" href="horarios.php">Horarios</a></li>
                <li class ="listas"><a href="novedadesprofesor.php">Novedades</a></li>
                <li class = "listas"><a href="registrar.php">registrar</a></li>
                <li class = "listas"><a href="salir.php">salir</a></li>
                
            </ul>
        </nav>
    </header>
<!--------------------------------------tabla de contenido-------------------------------------------------------------->
<div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <h1>Subir Archivos</h1>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Nuevo
                    </button>

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
                                    <td><?php echo $val['id'] ?> </td>
                                    <td><?php echo $val['title'] ?></td>
                                    <td><?php echo $val['description'] ?></td>
                                    <td>
                                        
                                        <a class="btn btn-primary" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/proyectouniversidad/' . $val['url']; ?>" >Ver Archivo en pagina</a>
                                        <a href="delete.php?id=<?php echo $val['id'] ?>" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------Modal-------------------------------------------------->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="form1">
                            <div class="form-group has-success">
                                <label for="title">Titulo</label>
                                <input data-toggle="popover" data-placement="bottom" data-content="agrega un titulo corto" onkeyup="activar_boton()" type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group has-success" >
                                <label for="description">Descripcion</label>
                                <input data-toggle="popover" data-placement="bottom" data-content="NOTA agregar el cuatrimestre" type="text" class="form-control" id="description" name="description">
                                
                            </div>
                            <div class="form-group has-success">
                                <label for="description">archivo</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" id ="btnvalidar" class="btn btn-primary" onclick="onSubmitForm()" disabled>Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>

        </div>
        <script src="js/jquery-1.11.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/validacion.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
        <script>
        //inicializa los popover que tengan el atributo  data-toggle="popover"
        $(function () {
          $('[data-toggle="popover"]').popover();
            
         $('.btn-success').popover({title: "Encabezado", content: "Animación en true", animation: true}); 
        $('.btn-warning').popover({title: "Encabezado", content: "Animación en false", animation: false}); 
         
            
        });
        
        
        //inicializa los popover que se encuentren el header
        /*$(function () {
            $('.example-popover').popover({
                container: 'header'
            })
        })*/
        
        
        //codigo para cambiar el foco
        $('.popover-dismiss').popover({
          trigger: 'focus'
        })
        
        
    </script>  
     
        <script>
            //funcion para el envio de archivo al localhost
                            function onSubmitForm() {
                                var frm = document.getElementById('form1');
                        
                                var data = new FormData(frm);
                                /*permite a los navegadores comunicarse con el servidor sin la necesidad de recargar la página*/
                                var xhttp = new XMLHttpRequest();
                                /*onreadystatechange mantiene la comunicacion con el servidor*/
                                xhttp.onreadystatechange = function () {
                                    //readyState es para ver el estado de carga del documento
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'GUARDADO') {
                                            
                                            alert(msg);
                                            $('#exampleModal').modal('hide')
                                        } else {
                                            alert(msg);
                                        }
                        

                                    }
                                };
                                //la accion es mandar llamar el archivo upload 
                                //El triggerse utiliza para el envío del formulario
                                xhttp.open("POST", "upload.php", true);
                                xhttp.send(data);
                                $('#form1').trigger('reset');
                            }
                            
        </script>

<br>
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
