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
              <a class="nav-link active" aria-current="page" href="/login/index.php">Inicio</a>
            </li>
            <li class="nav-item nav-item2">
              <a class="nav-link nav-item2" href="#">Acerca De</a>
            </li>
            <li class="nav-item nav-item2">
              <a class="nav-link nav-item2" href="#">Contacto</a>
            </li>
            <li class="nav-item nav-item2">
              <a class="nav-link" href="usuario.php">Tutorias</a>
            </li>

          </ul>
        </div>
        <a href="/login/view/home/login.php"><button type="button" class="btn btn-primary">INICIAR SESION</button></a>
        
      </div>
      
    </nav>
  </header>


  <br>


  






  <form action="store.php" class="g-3 needs-validation" novalidate method="POST">
    <h1 class="text-center">Registrese</h1>
    <div class="container">
        <div class="row">


            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
                <div class="valid-feedback">
                    Ok!
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
                <div class="valid-feedback">
                    Ok!
                </div>
             </div>

             <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Cedula de Identidad</label>
                <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername" name="cedula" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                     Por favor ingrese su CI.
                </div>
                </div>
             </div>


             

            <div class="correo col-md-4">
                <label for="validationCustom05" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="correo" id="validationCustom05" value="<?= (!empty($_GET["correo"])) ? $_GET["correo"] : "" ?>" placeholder="name@example.com">
                
            </div>



            <div class="contra col-md-4">
                    <div class="box-eye">
                        <button type="button" onclick="mostrarContrasenia('password', 'eyePassword')">
                            <i id="eyePassword" class="fa-eye">s</i>
                        </button>
                    </div>
                    <label for="validationCustom06" class="form-label">Contraseña</label>
                    <input type="password" id="password" class="form-control" name="contra" value="<?= (!empty($_GET["contraseña"])) ? $_GET["contraseña"] : "" ?>">

            </div>

            <div class="contra col-md-4">
                    <div class="box-eye">
                        <button type="button" onclick="mostrarContrasenia('password2', 'eyePassword2')">
                            <i id="eyePassword2" class="fa-eye">s</i>
                        </button>
                    </div>
                    <label for="validationCustom06" class="form-label">Verificar Contraseña</label>

                    <input type="password" id="password2" class="form-control" name="contraDos" value="<?= (!empty($_GET["confirmarContraseña"])) ? $_GET["confirmarContraseña"] : "" ?>"  >

            </div>


            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                    Acepto los términos y condiciones
                    </label>
                    <div class="invalid-feedback">
                    Debe estar de acuerdo antes de enviar.

                    </div>
                </div>
            </div>

            <?php if(!empty($_GET["error"])):?>
                <div id="alertError" class="alert alert-danger mb-2" role="alert" style="margin=auto;">
                <?= !empty($_GET["error"]) ? $_GET["error"] : ""?>

                </div>
            <?php endif;?>


            <div class="col-12">
            
            <button type="submit">Crear cuenta</button>
            </div>
        </div>
    </div>


</form>




<?php


require_once("C:/xampp/htdocs/login/view/head/footer.php");

?>