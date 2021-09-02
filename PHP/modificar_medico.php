<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja Medicos</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>
<style>
body {
  background-color: #6E6E6E;
}
#backgroundColor{
    margin-top: 190px;
    width: 700px;
    height: 400px;
    background-color: #eee;
    border-radius: 20px;
    padding: 20px;
}
.editButton{
    background-color: #fff200;
}
.modiButton{
    margin-top: 16px;
    margin-left: 20px;
}
</style>
    <div id="backgroundColor">
    <div class="modiButton">MODIFICAR MEDICO</div>
    <?php
    
    //TODO(1)iniciar conexion
    $conexion = mysqli_connect("localhost", "root", "1234anto", "clinica") or
        die("Problemas con la conexion:");

    //TODO(2)guardar datos en variable
    $registros = mysqli_query($conexion, "select * from medicos") or 
        die("Problemas con el Select: " . mysqli_error($conexion));
    
    //TODO(3)mostrar datos en tabla con while
    echo "<table class='container'>";
    echo "<tr>";
    echo "  <th> NOMBRE </th>";
    echo "  <th> PRIMER APELLIDO </th>";
    echo "  <th> SEGUNDO APELLIDO </th>";
    echo "  <th> ESPECIALIDAD </th>";
    echo "  <td> </td>";
    echo "</tr>";
    while ($reg = mysqli_fetch_array($registros)) { 
        echo "<br>";
        echo "<tr>";
        echo "<td> " . $reg['nombre'] . "</td>";
        echo "<td> " . $reg['apellido_1'] . "</td>";
        echo "<td> " . $reg['apellido_2'] . "</td>";
        echo "<td> " . $reg['especialidad'] . "</td>";
        echo '<td>  <a href="editar_medico.php?idMedico='.$reg['idMedico'].'"><center><div class="editButton">EDITAR</div></center></a> </td>';
        echo "</tr>";
    }
    echo "</table>";
    echo '<a href="../MENU/modificar.html"><div class="modiButton">VOLVER</div></a>';
    ?>
    </div>
</body>
</html>