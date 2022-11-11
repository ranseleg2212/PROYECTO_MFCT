<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "clara2025";
    $basedatos = "proyecto_mfct";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $basedatos);

   /* if($conexion-> connect_error){
        die("Conexion Fallida; " $conexion-> connect_error);
    }*/

    echo "Conexion Exitosa ";

    $NombEmpresa=$_GET['Nombre_de_la_empresa']??null;
    $NombPuesto=$_GET['Nombre_del_puesto']??null;
    $FunPues=$_GET['funciones_o_perfil_del_puesto']??null;
    $Sueldo=$_GET['sueldo']??null;
    $Ubicacion=$_GET['Ubicacion']??null;
    $TipoContrato=$_GET['Tipo_de_contrato']??null;
    $Horario=$_GET['Horario']??null;
    $CorreoEnvCurri=$_GET['Correo_al_que_se_debe_enviar_los_curriculum']??null;
    $PerConctacto=$_GET['Persona_de_contacto']??null;
    $Telefono=$_GET['Telefono']??null;
    $query="INSERT INTO proyecto_mfct.form_tres (nombre_empresa, puesto, funciones_perfil, sueldo, ubicacion, tipo_contacto, horario, correo_cv, contacto_persona, telefono) values('$NombEmpresa', '$NombPuesto', '$FunPues', $Sueldo,'$Ubicacion', '$TipoContrato' ,'$Horario','$CorreoEnvCurri','$PerConctacto','$Telefono')";
    echo $query;
    $x=mysqli_query($conexion,$query);
    echo $x;
    /* if($result=mysqli_query($conexion,$query)){
     print("Nuevos valores guardados",mysqli_insert_id($conexion));
 }*/