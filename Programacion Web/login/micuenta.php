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

                <a href="usuario.php" class="selected">
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

                <a href="notificacion.php">
                    <div class="option">
                        <i class="fas fa-video" title="Cursos"></i>
                        <h4>Notificaciones</h4>
                    </div>
                </a>

                <a href="#">
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

<div class="container">
    <div class="row">
        <div class="col-12">
            <h4>Mi Cuenta / Editar</h4>
        </div>

            




        </div>
    </div>


   



        <?php

        require_once("C:/xampp/htdocs/login/view/head/footer.php");

        ?>