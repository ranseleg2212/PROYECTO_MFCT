<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="im/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/CTSS.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form2.css" type="text/css">
    <link rel="stylesheet" href="css/fontello.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

    <title>Centros de trabajo</title>
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

    <div id="formulario_contenedor">
        <form method="POST" action="form2.php">
            <!--RNC Y NOMBRE DE LA EMPRESA-->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre_txt">Nombre de la empresa</label>
                    <input type="text" name="nombre_txt" class="nrd form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="rnc_txt">RNC</label>
                    <input type="text" name="rnc_txt" class="nrd form-control">
                </div>
            </div>
            <!-- FIN RNC Y NOMBRE DE LA EMPRESA-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="identidad_rdb">Desea que se conozca la identidad de la empresa?</label>
                    <select name="identidad_slt" class="form-control">
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="form-group col">
                    <label for="disposicion_rdb">Dispone su empresa para ser un centro de trabajo?</label>
                    <select name="disposicion_slt" class="form-control">
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="form-group col">
                    <label for="alcance_rdb">Alcance de la empresa</label>
                    <select name="alcance_slt" class="form-control">
                        <option value="local">Local/Nacional</option>
                        <option value="internacional">Internacional</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="actividad_ta">Actividad económica de la empresa</label>
                <br>
                <textarea name="actividad_ta" class="form-control"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="industria_slt">Industria</label>
                    <br>
                    <select name="industria_slt" id="" class="form-control">
                        <option value="Agrícola">Agrícola</option>
                        <option value="Comercio">Comercio</option>
                        <option value="Ganadería">Ganadería</option>
                        <option value="Extracción">Extracción</option>
                        <option value="Manufactura">Manufactura</option>
                        <option value="Otra">Otra</option>
                        <option value="Servicio">Servicio</option>
                    </select>
                </div>

                <div class="form-group col">
                    <label for="tamano_slt">Tamaño de la empresa</label>
                    <br>
                    <select name="tamano_slt" id="" class="form-control">
                        <option value="Micro">Micro</option>
                        <option value="Pequeña">Pequeña</option>
                        <option value="Mediana">Mediana</option>
                        <option value="Grande">Grande</option>
                    </select>
                </div>
            </div>

            <!--DATOS DE LA DIRECCIÓN-->
            <div class="form-row">
                <div class="col">
                    <label for="direccion_txt">Dirección</label>
                    <br>
                    <input type="text" name="direccion_txt" class="nrd form-control">
                </div>

                <div class="col">
                    <label for="sector_txt">Sector</label>
                    <br>
                    <input type="text" name="sector_txt" class="nrd form-control">
                </div>

                <div class="form-group col">
                    <label for="seccion_txt">Sección</label>
                    <br>
                    <input type="text" name="seccion_txt" class="nrd form-control">
                </div>
                <div class="form-group col">
                    <label for="municipio_txt">Municipio</label>
                    <br>
                    <input type="text" name="municipio_txt" class="nrd form-control">
                </div>

                <div class="form-group col">
                    <label for="provincia_slt">Provincia</label>
                    <br>
                    <select name="provincia_slt" class="form-control">
                        <option value="Santiago">Santiago</option>
                        <option value="Azua">Azua</option>
                        <option value="La Vega">La Vega</option>
                        <option value="Santo Domingo">Santo Domingo</option>
                        <option value="La Romana">La Romana</option>
                        <option value="Samaná">Samaná</option>
                        <option value="Dajabón">Dajabón</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="pais_slt">Pais de operación</label>
                <br>
                <select name="pais_slt" disabled class="form-control">
                    <option value="República Dominicana">República Dominicana</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="telp_txt">Teléfono principal</label>
                    <br>
                    <input type="tel" name="telp_txt" class="nrd">
                </div>

                <div class="form-group col">
                    <label for="teld_txt">Teléfono directo</label>
                    <br>
                    <input type="tel" name="teld_txt" class="nrd">
                </div>
            </div>
            <div class="form-group">
                <label for="email_txt">Correo electrónico</label>
                <br>
                <input type="email" name="email_txt" class="nrd">
            </div>

            <div class="form-group">
                <label for="clave_txt">Contraseña</label>
                <br>
                <input type="password" name="clave_txt" class="nrd">

            </div>
            <div class="form-row">
            <div class="form-group col">
                    <label for="cont_txt">Contacto</label>
                    <br>
                    <input type="text" name="cont_txt" class="nrd">
                </div>
                <div class="form-group col">
                    <label for="cont_tel_txt">Teléfono y extención del contacto</label>
                    <br>
                    <input type="text" name="cont_tel_txt" class="nrd">
                </div>
                <div class="form-group col">
                    <label for="cont_ema_txt">Correo</label>
                    <br>
                    <input type="email" name="cont_ema_txt" class="nrd">
                </div>
            </div>

            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Registrar mi empresa" class="nrd">
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

</body>

</html>
<?php
$conexion = mysqli_connect('localhost', 'root', '', 'proyecto_mfct')or die(mysqli_error($mysqli));
insertar($conexion);
function insertar($conexion){
    $nombre = $_POST['nombre_txt']??null;
    $rnc = $_POST['rnc_txt']??null;
    $identidad = $_POST['identidad_slt']??null;
    $disposicion = $_POST['disposicion_slt']??null;
    $alcance = $_POST['alcance_slt']??null;
    $actividad = $_POST['actividad_ta']??null;
    $industria = $_POST['industria_slt']??null;
    $tamano = $_POST['tamano_slt']??null;
    $direccion = $_POST['direccion_txt']??null;
    $sector = $_POST['sector_txt']??null;
    $seccion = $_POST['seccion_txt']??null;
    $municipio = $_POST['municipio_txt']??null;
    $provincia = $_POST['provincia_slt']??null;
    //$operaciones = $_POST['pais_slt']??null;
    $operaciones = "República Dominicana";
    $telp = $_POST['telp_txt']??null;
    $teld = $_POST['teld_txt']??null;
    $correo = $_POST['email_txt']??null;
    $clave = $_POST['clave_txt']??null;
    $cont = $_POST['cont_txt']??null;
    $cont_tl = $_POST['cont_tel_txt']??null;
    $cont_ema = $_POST['cont_ema_txt']??null;
    $consulta = "INSERT INTO proyecto_mfct.form_dos (rnc, nombre, cnc_identidad, dispone, alcance, dedicacion, industria, tamano, direccion, seccion, sector, municipio, provincia, operaciones, tel_principal, tel_directo, email, clave, contacto, tel_ext, correo_contacto) 
    VALUES ('$rnc', '$nombre', '$identidad', '$disposicion', '$alcance', '$actividad', '$industria', '$tamano', '$direccion', '$seccion', '$sector', '$municipio', '$provincia', '$operaciones', '$telp', '$teld', '$correo', '$clave', '$cont', '$cont_tl', '$cont_ema');";
 
mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
?>