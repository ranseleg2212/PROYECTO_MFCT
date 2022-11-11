<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="im/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form1.css" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link href="css/CTSS.css" rel="stylesheet">
    <title>Estudiantes y egresados</title>
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
          <li class="nav-item">
            <a class="nav-link" href="form2.php">Registro centros de trabajo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form1.php">Estudiantes y egresados</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registro de vacantes</a>
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

    <div id="formulario">
        <form method="POST">

            <!--PRIMERA FILA DE INPUTS-->
            <div class="form-row">

                <div class="form-group col">

                    <label for="institucion_slt">Institución a la que pertenece</label>
                    <select name="institucion_slt" id="" class="form-control">
                        <option value="IPISA">Instituto politecnico industrial de santiago IPISA</option>
                        <option value="IPIBOSCO">Instituto politecnico industrial Don bosco</option>
                        <option value="IPL">Instituto politecnico Loyola </option>
                    </select>
                </div>

                <div class="form-group col">
                    <label for="matricula_txt">Matrícula</label>
                    <input type="text" name="matricula_txt" class="form-control">
                </div>

                <div class="form-group col">
                    <label for="carrera_slt">Carrera</label>
                    <select name="carrera_slt" class="form-control">
                        <option value="Informática">Informatica</option>
                        <option value="Gestión Administrativa">Contabilidad</option>
                        <option value="Mecánica Industrial">Idustrial</option>
                    </select>
                </div>

            </div>
            <!--FIN PRIMERA FILA DE INPUTS-->

            <!--INTERMEDIA-->
            <div class="form-row">
                <div class="form-group col">

                    <label for="curso_slt">Curso</label>
                    <select name="curso_slt" id="" class="form-control">
                        <option value="Primero">1ro</option>
                        <option value="Segundo">2do</option>
                        <option value="Tercero">3ro</option>
                        <option value="Cuarto">4to</option>
                    </select>
                </div>
                <div class="form-group col">

                    <label for="graduacion_slt">Año de graduación</label>
                    <select name="graduacion_slt" id="" class="form-control">
                        <option value="2017-2018">2017-2018</option>
                        <option value="2018-2019">2018-2019</option>
                        <option value="2019-2020">2019-2020</option>
                        <option value="2020-2021">2020-2021</option>
                        <option value="2021-2022">2021-2022</option>
                    </select>
                </div>
            </div>
            <!--FIN INTERMEDIA-->

            <!--INTERMEDIA2-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="cedula_txt">Cédula de identidad</label>
                    <input type="text" name="cedula_txt" id="" class="form-control">
                </div>
                <div class="form-group col">

                    <label for="tecbac_slt">Técnico Básico</label>
                    <select name="tecbac_slt" id="" class="form-control">
                        <option value="N/A">N/A</option>
                    </select>
                </div>
            </div>
            <!--FIN INTERMEDIA2>

            <!--SEGUNDA FILA DE INPUTS-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="nombres_txt">Nombres</label>
                    <input type="text" name="nombres_txt" class="form-control">
                </div>

                <div class="form-group col">
                    <label for="fecha_dt">Fecha de nacimiento</label>
                    <input type="date" name="fecha_dt" class="form-control">
                </div>
            </div>
            <!--FIN SEGUNDA FILA DE INPUTS-->

            <!--INTERMEDIA3-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="apellidos_txt">Apellidos</label>
                    <input type="text" name="apellidos_txt" id="" class="form-control">
                </div>
                <div class="form-group col">

                    <label for="sexo_slt">Sexo</label>
                    <select name="sexo_slt" id="" class="form-control">
                        <option value="M">Hombre</option>
                        <option value="F">Mujer</option>
                    </select>
                </div>
            </div>
            <!--FIN INTERMEDIA3-->

            <!--TERCERA FILA DE INPUTS-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="direccion_txt">Dirección</label>
                    <input type="text" name="direccion_txt" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="seccion_txt">Sección</label>
                    <input type="text" name="seccion" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="provincia_slt">Provincia</label>
                    <select name="provincia_slt" class="form-control">
                        <option value="Santiago">Santiago</option>
                        <option value="Dajabón">Dajabon</option>
                        <option value="Azua">Azua</option>
                    </select>
                </div>
            </div>

            <!--INTERMEDIA4-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="sector_txt">Sector</label>
                    <input type="text" name="sector_txt" id="" class="form-control">
                </div>
                <div class="form-group col">

                    <label for="municipio_txt">Municipio</label>
                    <input type="text" name="municipio_txt" id="" class="form-control">
                </div>
            </div>
            <!--FIN INTERMEDIA4-->

            <!--INTERMEDIA5-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="nacionaliad_slt">Pais de nacionalidad</label>
                    <select name="nacionalidad_slt" id="" class="form-control">
                        <option value="RD">República Dominicana</option>
                        <option value="Cánada">Cánada</option>
                        <option value="USA">USA</option>
                        <option value="España">España</option>
                        <option value="Colombia">Colombia</option>
                    </select>
                </div>
            </div>
            <!--FIN INTERMEDIA5-->

            <!--INTERMEDIA6-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="tel_res_txt">Teléfono residencial</label>
                    <input type="tel" name="tel_res_txt" id="" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="tel_mov_txt">Teléfono movil</label>
                    <input type="tel" name="tel_mov_txt" id="" class="form-control">
                </div>
            </div>
            <!--FIN INTERMEDIA6-->


            <!--INTERMEDIA7-->
            <div class="form-row">
                <div class="form-group col">
                    <label for="licencia_slt">Posee licencia de conducir?</label>
                    <select name="licencia_slt" id="" class="form-control">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="vehiculo_slt">Posee vehículo propio?</label>
                    <select name="vehiculo_slt" id="" class="form-control">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <!--FIN INTERMEDIA7-->

            <div class="form-row">
                <div class="form-group col">
                    <label for="correo_txt">Correo electrónico</label>
                    <input type="email" name="correo_txt" id="" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="clave_txt">Contraseña</label>
                    <input type="password" name="clave_txt" id="" class="form-control">
                </div>
            </div>
            <!--FIN INTERMEDIA7-->

            <!--FIN INTERMEDIA8-->

            <div class="form-row">
                <div class="form-group col">
                    <label for="experiencia_txt">Experiencia</label>
                    <input type="text" name="experiencia_txt" id="" class="form-control">
                </div>
                <div class="form-group col">
                    <label for="area_slt">Desea trabajar en la misma área?</label>
                    <select name="area_slt" id="" class="form-control">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <!--FIN INTERMEDIA8-->

            <!--FIN INTERMEDIA9-->

            <div class="form-row">
                <div class="form-group col">
                    <input type="file" class="custom-file-input" name="cv_file">
                    <label class="custom-file-label" for="cv_file">CV</label>
                </div>
            </div>
            <!--FIN INTERMEDIA9-->
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Registrarme" class="nrd">
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
$conexion = mysqli_connect('localhost', 'root', '', 'proyecto_mfct') or die(mysqli_error($mysqli));
if ($_POST) {
    insertar($conexion);
}
function insertar($conexion)
{
    $inst = $_POST['institucion_slt'] ?? null;
    $matr = $_POST['matricula_txt'] ?? null;
    $carr = $_POST['carrera_slt'] ?? null;
    $curs = $_POST['curso_slt'] ?? null;
    $grad = $_POST['graduacion_slt'] ?? null;
    $cedu = $_POST['cedula_txt'] ?? null;
    $tcbc = $_POST['tecbac_slt'] ?? null;
    $nomb = $_POST['nombres_txt'] ?? null;
    $feaf = $_POST['fecha_dt'] ?? null;
    //CAMBIAR FORMATO DE FECHA
    $feca = explode("/", $feaf);
    $dia = $feca[0] ?? null;
    $mes = $feca[1] ?? null;
    $ann = $feca[2] ?? null;
    $fech = $ann . $mes . $dia;
    //FIN CAMBIO FORMATO
    $apel = $_POST['apellidos_txt'] ?? null;
    $sexo = $_POST['sexo_slt'] ?? null;
    $dire = $_POST['direccion_txt'] ?? null;
    $secc = $_POST['seccion_txt'] ?? null;
    $prov = $_POST['provincia_slt'] ?? null;
    $sect = $_POST['sector_txt'] ?? null;
    $muni = $_POST['municipio_txt'] ?? null;
    $naci = $_POST['nacionaliad_slt'] ?? null;
    $tlrs = $_POST['tel_res_txt'] ?? null;
    $tlmv = $_POST['tel_mov_txt'] ?? null;
    $lccn = $_POST['licencia_slt'] ?? null;
    $vhpr = $_POST['vehiculo_slt'] ?? null;
    $corr = $_POST['correo_txt'] ?? null;
    $clav = $_POST['clave_txt'] ?? null;
    $expe = $_POST['experiencia_txt'] ?? null;
    $tbar = $_POST['area_slt'] ?? null;
    $curr = $_POST['cv_file'] ?? null;
    $consulta = "INSERT INTO form_uno(graduacion, institucion, curso, matricula, cedula, carrera, tecnico_basico, nombres, apellidos, nacimiento, sexo, direccion, sector, seccion, municipio, provincia, nacionalidad, tel_residencial, tel_movil, licencia, vh_propio, email, clave, experiencia, cv, job_area) VALUES('$grad','$inst',
    '$curr','$matr','$cedu','$carr','$tcbc','$nomb','$apel','$fech','$sexo','$dire','$sect','$secc','$muni','$prov',
    '$naci','$tlrs','$tlmv','$lccn','$vhpr','$corr','$clav','$expe','$curr','$tbar')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
?>