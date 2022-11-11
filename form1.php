<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form1.css" typé="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
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