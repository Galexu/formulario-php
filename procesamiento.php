<?php
$bd_servidor = "localhost";
$bd_usuario = "root";
$bd_pass = "";
$bd_nombre = "formulario_php";
$conexion = "";

try {
    $conexion = mysqli_connect($bd_servidor, $bd_usuario, $bd_pass, $bd_nombre);
} catch (mysqli_sql_exception) {
    echo "Conexion fallida";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["evento"] === "Otro: (especificar)") {
      $evento = $_POST["evento_otro"];
    } else {
       $evento = $_POST["evento"];
    }
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $lugar = $_POST["lugar"];
    $nombre_contacto = $_POST["nombre_contacto"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $asistentes = $_POST["asistentes"];
    $nombre_completo = $_POST["nombre_completo"];
    $donde_es = $_POST["donde_es"];
    $actividad_principal = $_POST["actividad_principal"];
    $aficiones = $_POST["aficiones"];
    $anecdotas = $_POST["anecdotas"];
    $tabu = $_POST["tabu"];
    $informacion_adicional = $_POST["informacion_adicional"];
    $nivel_sorpresa = isset($_POST["nivel_sorpresa"]) ? $_POST["nivel_sorpresa"] : [];
    $rango_edades = isset($_POST["rango_edades"]) ? $_POST["rango_edades"] : [];

    $nivel_sorpresa_texto = implode(", ", $nivel_sorpresa);
    $rango_edades_texto = implode(", ", $rango_edades);

    $sql = "INSERT INTO 
        formulario (evento, fecha, hora, lugar, nombre_contacto, telefono, email, asistentes, nombre_completo, donde_es, actividad_principal, aficiones, anecdotas, tabu, informacion_adicional, nivel_sorpresa, rango_edades) 

        VALUES 
        ('$evento', '$fecha', '$hora', '$lugar', '$nombre_contacto', '$telefono', '$email', '$asistentes', '$nombre_completo', '$donde_es', '$actividad_principal', '$aficiones', '$anecdotas', '$tabu', '$informacion_adicional', '$nivel_sorpresa_texto', '$rango_edades_texto')";

    $insercion = mysqli_query($conexion, $sql);

    if ($insercion) {
        echo "La inserción se realizó correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}
