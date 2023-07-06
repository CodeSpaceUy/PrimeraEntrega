<?php

require_once("C:/xampp/htdocs/login/view/head/head.php");
if(!empty($_SESSION['usuario'])){
  header("Location:panel_control.php");
}

?>


<header>




<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
         
          <a class="navbar-brand" href="/login/index.php">
            <img class="logoutu"
              src="https://www.utu.edu.uy/sites/www.utu.edu.uy/files/utu/recursos/LOGO-ANEP-DGETP---2021-Fondo-Transparente.png"
              alt="Logo Tutorias">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        

      

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
            </li>
            <li class="nav-item nav-item2">
              <a class="nav-link nav-item2" href="#">Acerca De</a>
            </li>
            <li class="nav-item nav-item2">
              <a class="nav-link nav-item2" href="#">Contacto</a>
            </li>
            <li class="nav-item nav-item2">
              <a class="nav-link" href="#">Tutorias</a>
            </li>

          </ul>
        </div>
        <a href="/login/view/home/singup.php"><button type="button" class="btn btn-primary">Crea tu Cuenta</button></a>
        
      </div>
      
    </nav>
  </header>

  <br>



  <div class="iniciar container">
    <div class="row">
        <h1 class="text-center">Iniciar Sesion</h1>


        <div class="container py-5">
    <form action="verificar.php" method="POST" autocomplete="off">
      <div class="form-group">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <br>
      <div class="form-group">
        <div class="box-eye">
            <button type="button" onclick="mostrarContrasenia('password', 'eyePassword')">
                <i id="eyePassword" class="fa-eye">s</i>
            </button>
        </div>
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <?php if(!empty($_GET["error"])):?>
                <div id="alertError" class="alert alert-danger mb-2" role="alert" style="margin=auto;">
                <?= !empty($_GET["error"]) ? $_GET["error"] : ""?>

                </div>
            <?php endif;?>


      <input type="submit" class="btn btn-primary" name="boton"></input>
      
    </form>

  </div>
    </div>
  </div>
    



<?php


require_once("C:/xampp/htdocs/login/view/head/footer.php");

?>