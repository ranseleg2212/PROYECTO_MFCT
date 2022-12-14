<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="im/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vacantes-</title>
  <link rel="stylesheet" href="css/form3.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">
  <link href="css/form3.css" rel="stylesheet" type="text/css">
  <!--NO CAMBIEN NADA EN EL CTSS-->
  <link href="css/CTSS.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fontello.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</head>

<body>
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Formularios MFCT
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="nav-link dropdown-item" href="form2.php">Registro centros de trabajo</a>
              </li>
              <li>
                <a class="nav-link dropdown-item" href="form1.php">Estudiantes y egresados</a>
              </li>
              <li>
                <a class="nav-link dropdown-item" href="form3.php">Registro de vacantes</a>
              </li>
              </ul>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2"><strong>Instituto Politécnico Industrial de Santiago IPISA</strong>
          </h1>
          <p class="lead mb-5 text-white-50">El Instituto Politécnico Industrial de Santiago (IPISA), es una institución
            educativa técnico profesional con uno de los más altos niveles de expansión y crecimient
        </div>
      </div>
    </div>
    </div>
    </div>
  </header>
  <!--Fin Header-->
  <h2 id="titulo">Registro de vacantes</h2>
  <div id="formulario">
    <form method="POST">


      <div class="form-row">
        <div class="form-group col">
          <label for="nme">Nombre de la empresa</label>
          <input type="text" name="nme" class="form-control">
        </div>
        <div class="form-group col">
          <label for="nmp"> Nombre del puesto </label>
          <input type="text" name="nmp" class="form-control">
        </div>
      </div>

      <label for="fnp"> Funciones o perfil del puesto</label>
      <input type="text" name="fnp" class="form-control">

      <label for="sdp"> Sueldo</label>
      <input type="text" name="sdp" class="form-control">

      <label for="ube">Ubicacion</label>
      <input type="text" name="ube" class="form-control">

      <div class="form-row">
        <div class="form-group col">
          <label for="tpc">Tipo de contrato</label>
          <select name="tpc" class="form-control">
            <option value="Temporal">Temporal</option>
            <option value="Fijo">Fijo</option>
          </select>
        </div>
        <div class="form-group col">
          <label for="htb">Horario</label>
          <input type="text" name="htb" class="form-control">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col">
          <label for="ccv">Correo al que se debe enviar el currículum</label>
          <input type="text" name="ccv" class="form-control">
        </div>
        <div class="form-group col">
          <label for="psc">Persona de contacto</label>
          <input type="text" name="psc" class="form-control">
        </div>
        <div class="form-group col">
          <label for="tlf">Telefono</label>
          <input type="text" name="tlf" class="form-control">
        </div>
      </div>
      <input type="submit" value='Enviar' class="btn btn-primary btn-lg btn-block">
      <a href="ver_vacantes.php" class="btn btn-primary btn-lg btn-block">Consultar Vacantes</a>
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
                <p id="pqip">El Instituto Politécnico Industrial de Santiago (IPISA),
                  es una institución educativa técnico profesional con uno de los más
                  altos niveles de expansión y crecimiento en este tipo de modelo de educación, así como también, acorde
                  a la vanguardia de los nuevos tiempos.</p>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'proyecto_mfct')or die(mysqli_error($mysqli));
    insertar($conexion);
    function insertar($conexion){
    $nme=$_POST['nme']??null;
    $nmp=$_POST['nmp']??null;
    $fnp=$_POST['fnp']??null;
    $sdp=$_POST['sdp']??null;
    $ube=$_POST['ube']??null;
    $tpc=$_POST['tpc']??null;
    $htb=$_POST['htb']??null;
    $ccv=$_POST['ccv']??null;
    $psc=$_POST['psc']??null;
    $tlf=$_POST['tlf']??null;
    $queryi="INSERT INTO form_tres(nombre_empresa, puesto, funciones_perfil, sueldo, ubicacion, tipo_contacto, horario, correo_cv, contacto_persona, telefono) values('$nme', '$nmp', '$fnp', $sdp, '$ube', '$tpc', '$htb', '$ccv','$psc', '$tlf')";
    mysqli_query($conexion, $queryi);
    mysqli_close($conexion);
 }
?>