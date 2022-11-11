<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form2.css" type="text/css">
    <title>Formulario 2</title>
</head>

<body>
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
        <a class="btn btn-primary btn-lg btn-block" href="">Ir al LogIn</a>
    </div>
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