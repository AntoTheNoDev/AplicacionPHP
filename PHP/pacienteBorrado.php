<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente Borrado</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>
<style>
body {
  background-color: #6E6E6E;
  margin: auto;
  width: 700px;
  height: 500px;
}
.containerTrue{
    width: 600px;
    height: 300px;
    background-color: #eee;
    border-radius: 20px;
    color: #2E8B57;
    padding: 20px;
    font-size: 20px;
    font-family: Arial;
    text-align: center;
}
.containerFalse{
    width: 600px;
    height: 300px;
    background-color: #eee;
    border-radius: 20px;
    color: #2E8B57;
    padding: 20px;
    font-size: 20px;
    font-family: Arial;
    text-align: center;
}
.myButton3{
    margin-left: 10px;
    margin-top: 100px;
}
</style>
    <?php
    $conexion = mysqli_connect("localhost", "root", "1234anto", "clinica") or
        die("Problemas con la conexion:");

    $id = $_GET['idPaciente'];

    $consulta = "DELETE FROM pacientes WHERE idPaciente = $id";
    
    if (mysqli_query($conexion, $consulta)) {
        echo '<div class="containerTrue">';
        echo 'PACIENTE BORRADO CORRECTAMENTE';
        echo '<a href="baja_paciente.php"><div class="myButton3">VOLVER</div></a>';
        echo '</div>';
    } else {
        echo "<div class='containerFalse'>ERROR AL BORRAR EL PACIENTE</div>" . mysqli_error($conexion);
        echo '<a href="baja_paciente.php"><div class="myButton3">VOLVER</div></a>';
    }
    ?>
</body>
</html>