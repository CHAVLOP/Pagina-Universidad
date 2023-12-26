<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/menus.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo</title>
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
                <li class = "listas"><a  href="inicio.php">Inicio</a></li>
                <li class = "listas"><a href="carreras.php">Carreras</a></li>
                <li class = "listas"><a href="novedades.php">Novedades</a></li>
                <li class = "listas"><a class="enlace" href="login2.php">iniciar sesion</a></li>
                
            </ul>
        </nav>
    </header>
<br>







<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        desarrollador 1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Gerardo Hernandez Hernandez</strong> 
        <br>
        <i class="fas fa-map-marker-alt"> Romita Guanajuato</i>
        <br>
        <i class="fab fa-whatsapp-square"> 429-117-96-83</i>
        <br>
        <i class="fab fa-facebook"> Gera Hernadez</i>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      desarrollador 2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      
      <strong>Bryan Salvador Vargas Lòpez</strong>
      <br>
        <i class="fas fa-map-marker-alt"> Abasolo Guanajuato</i>
        <br>
        <i class="fab fa-whatsapp-square"> 429-136-63-83</i>
        <br>
        <i class="fab fa-facebook"> Salvador Vargas</i>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      desarrollador 3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Manuel Barbosa Ramirez</strong> <br>
        <i class="fas fa-map-marker-alt"> Irapuato Guanajuato</i>
        <br>
        <i class="fab fa-whatsapp-square"> 462-257-34-01</i>
        <br>
        <i class="fab fa-facebook"> Manuel Barbosa</i>
        
      </div>
    </div>
  </div>
</div>
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</body>
</html>