<?php

require_once("C:/xampp/htdocs/login/view/head/head.php");

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">

    <header>
      <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open" onclick="abrir()"></i>
      </div>
    </header>

    <div class="menu__side veri verido" id="menu_side">

      <div class="name__page">
        <i class="fab fa-youtube"></i>
        <h4>Ututorias</h4>
      </div>

      <div class="options__menu">

        <a href="#" class="selected">
          <div class="option">
            <i class="fas fa-home" title="Inicio"></i>
            <h4>Tutorias</h4>
          </div>
        </a>

        <a href="historial.php">
          <div class="option">
            <i class="far fa-file" title="Portafolio"></i>
            <h4>Historial de Solicitudes</h4>
          </div>
        </a>

        <a href="notificaciones.php">
          <div class="option">
            <i class="fas fa-video" title="Cursos"></i>
            <h4>Notificaciones</h4>
          </div>
        </a>

        <a href="micuenta.php">
          <div class="option">
            <i class="far fa-sticky-note" title="Blog"></i>
            <h4>Mi cuenta</h4>
          </div>
        </a>

        <a href="#">
          <div class="option">
            <i class="far fa-id-badge" title="Contacto"></i>
            <h4>Mi Institucion</h4>
          </div>
        </a>



      </div>

    </div>



    <a class="navbar-brand" href="/login/index.php">
      <img class="logoutu"
        src="https://www.utu.edu.uy/sites/www.utu.edu.uy/files/utu/recursos/LOGO-ANEP-DGETP---2021-Fondo-Transparente.png"
        alt="Logo Tutorias">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" href="#">Tutorias</a>
        </li>

        <li class="nav-item nav-item2">
          <a class="nav-link" href="#">Cerrar Sesion</a>
        </li>

      </ul>
    </div>


  </div>
</nav>

<br>
<!-- <div class="container">
  <div class="row">
    <div class="col-12 ">
      <h4>Solicitud</h4>
    </div>


    <div class="col-5 ">
      <div class="card ">
        <div class="card-header">
         Crear tutoría
        </div>
        <div class="card-body">

          <form class="row g-3 needs-validation crear_tutoria" novalidate>
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Materia</label>
              <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 ">
              <label for="validationCustom04" class="form-label">Curso</label>
              <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom04" class="form-label">Modalidad</label>
              <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-5">
              <label for="validationCustom04" class="form-label">Días</label>
              <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>Lunes</option>
                 <option>Martes</option>
                  <option>Miercoles</option>
                   <option>Jueves</option>
                    <option>Viernes</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-7">
              <label for="validationCustom01" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustom05" class="form-label">Comentarios</label><br>
              <textarea name="" id="" cols="40" rows="2"></textarea>
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Adjunte un archivo</label>
              <input type="file" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Enviar Solicitud</button>
            </div>
          </form>


        </div>
      </div>
    </div> -->

     <div class="col-7 justify-content-center">
      <div class="card">
        <h5 class="card-header">Proximas Tutorias</h5>
        <div class="card-body">


          <table class="table">
            <thead>
              <tr>
                <th scope="col">Asunto</th>
                <th scope="col">Asignatura</th>
                <th scope="col">Dia</th>
                <th scope="col">Hora</th>
                <th scope="col">Modalidad</th>
                <th scope="col">Unirme</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">Matematica 1</th>
                <td>Matematica</td>
                <td>2023-06-24</td>
                <td>9:15-9:55</td>
                <td>Presencial</td>
                <td><a class="btn btn-primary" href="#" role="button">Unirme</a>
                </td>
              </tr>
              <tr>
                <th scope="row">Programacion 1</th>
                <td>Programacion</td>
                <td>2023-06-27</td>
                <td>9:15-9:55</td>
                <td>Presencial</td>
                <td><a class="btn btn-primary" href="#" role="button">Unirme</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>



  </div>
</div>




<?php

require_once("C:/xampp/htdocs/login/view/head/footer.php");

?>