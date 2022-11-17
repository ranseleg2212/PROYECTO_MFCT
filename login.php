<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-IPISA</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <link href="css/login.css" rel="stylesheet">

    <link href="css/CTSS.css" rel="stylesheet">

    <link rel="stylesheet" href="css/fontello.css">

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
     <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="im/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="INICIO.html">INICIO
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pasantia.html">PASANTÍA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="colaboradores.html">COLABORADORES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="familiares.html">FAMILIARES</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Registro de Centros de Trabajo</a></li>
            <li><a class="dropdown-item" href="#">LogIn</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Registro para estudiantes/egresados</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Fin Barra de navegación-->

   <!-- Header -->
   <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2"><strong>Instituto Politécnico Industrial de Santiago IPISA</strong>
          </h1>
          <p class="lead mb-5 text-white-50">El Instituto Politécnico Industrial de Santiago (IPISA), es una institución
            educativa técnico profesional con uno de los más altos niveles de expansión y crecimiento en este tipo de
            modelo de educación, así como también, acorde a la vanguardia de los nuevos tiempos.</p>
        </div>
      </div>
    </div>
  </header>
  <!--Fin Header-->
    <div id="formulario_login">
        <h3>Inicie Sesión</h3>
        <form method="POST" action="">
            <label for="correo_log_txt">Email</label>
            <input type="email" name="correo_log_txt" class="form-control">
            <label for="clave_log_txt">Contraseña</label>
            <input type="password" name="clave_log_txt" class="form-control">
            <br>
            <button type="submit" id="entrar_btn" class="btn btn-lg btn-primary">Entrar</button>
            <br>
            <a id="crear_a" href="form2.php">¿No tienes una cuenta?</a>
        </form>
    </div>
    <!-- Footer -->

  <div class="m-t-3"></div>

<footer>


  <footer class="mainfooter" role="contentinfo">
    <div class="footer-top p-y-2">
      <div class="container-fluid">

      </div>
    </div>
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Dirección</h4>
              <address>
                <ul class="list-unstyled">
                  <li>
                    Av. Hispanoamericana,<BR>
                    Km 1 Santiago, Zona S<BR>
                    República Dominicana
                  </li>
                  <li>
                    Teléfono: (809) 724-5700
                  </li>
                </ul>
              </address>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Navegación</h4>
              <ul class="list-unstyled">
                <li><a href="https://ipisa.edu.do/index.php/sobre-nosotros/">Acerca de nosotros</a></li>
                <li><a href="https://www.facebook.com/IPISASDB/photos/?ref=page_internal">Galería</a></li>
                <li><a href="https://ipisa.edu.do/index.php/noticias/">Noticias</a></li>
                <li><a href="https://ipisa.edu.do/index.php/talleres/">Talleres</a></li>
                <li><a href="https://ipisa.edu.do/index.php/promociones/">Promociones</a></li>
                <li><a href="https://ipisa.edu.do/index.php/contactos/">Contacto</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>¿Por qué IPISA?</h4>
              <p id="pqip">El Instituto Politécnico Industrial de Santiago (IPISA), es una institución educativa
                técnico profesional con uno de los más altos niveles de expansión y crecimiento en este tipo de modelo
                de educación, así como también, acorde a la vanguardia de los nuevos tiempos.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Talleres</h4>
              <ul class="list-unstyled" id="decorar">
                <li><a href="http://ipisa.edu.do/index.php/gestion-administrativa-y-tributaria/">Gestión
                    Administrativa y Tributaria</a></li>
                <li><a
                    href="http://ipisa.edu.do/index.php/index.php/desarrollo-de-aplicaciones-informaticas/">Desarrollo
                    y Administración de Aplicaciones Informáticas</a></li>
                <li><a href="http://ipisa.edu.do/index.php/corte_y_patronaje/">Confección y Patronaje</a></li>
                <li><a href="http://ipisa.edu.do/index.php/gestion-administrativa-y-tributaria/">Mecánica
                    Industrial</a></li>
                <li><a href="http://ipisa.edu.do/index.php/electromecanica-de-vehiculos/">Electromecánica de
                    Vehículos</a></li>
                <li><a href="http://ipisa.edu.do/index.php/ensamblaje-de-muebles/">Muebles y Estructura de la
                    Madera</a></li>
                <li><a href="http://ipisa.edu.do/index.php/instalaciones-electricas/">Instalaciones Eléctricas</a>
                </li>
                <li><a href="http://ipisa.edu.do/index.php/equipos-electronicos/">Equipos Electrónicos</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
          </div>
        </div>
        <div class="container34">
          <p class="copy" align="center"><strong>IPISA</strong> &copy; 2023</p>
          <br>
          <div class="sociales">
            <a class="icon-instagram" href="https://www.instagram.com/"></a>
            <a class="icon-facebook-squared" href="https://www.facebook.com/ipi.salesianos"></a>
            <a class="icon-twitter" href="https://twitter.com/"></a>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>


  </footer>
  <!--Fin Footer-->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
$email = $_POST['correo_log_txt'];
$clave = $_POST['clave_log_txt'];
$conexion = mysqli_connect('localhost', 'root', '', 'proyecto_mfct')or die(mysqli_error($mysqli));
$consulta = "SELECT * FROM form_dos WHERE email = '$email'  AND clave  = '$clave'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>