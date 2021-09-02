<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar paciente</title>
    <link rel="stylesheet" href="../main.css">
</head>
<body>
<style>
body {
  background-color: #6E6E6E;
}
form{
    background-color:#eee;
    margin: auto;
    width: 600px;
    padding: 30px;
    border-radius: 20px
}
#caja{
    margin-top: 30px;
}
input{
    margin-top: 5px;
}
input[type=submit]{
    background-color: #fff200;
}
</style>
    <div id="caja">
    <?php
    $id = $_GET['idPaciente'];
    $conexion = mysqli_connect("localhost", "root", "1234anto", "clinica") or
        die("Problemas con la conexion:");
    
    $registros = mysqli_query($conexion, "select * from pacientes where $id = idPaciente") or 
        die("Problemas con el Select: " . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
    ?>
        <form action="paciente_modificado.php" method="POST">
        <table  style="width:100%">
        <input type="reset" value="MODIFICAR PACIENTE" class="modiButton"><br>
        <tr class="tabla">
            <th>DNI</th>
            <th><input type="text" name="nuevo_dni" id="nuevo_dni" value="<?php echo $reg['dni'] ?>"></th>
        </tr>
        <tr>
            <th>NOMBRE</th>
            <th><input type="text" name="nuevo_nombre" id="nuevo_nombre" value="<?php echo $reg['nombre'] ?>"> </th>
        </tr>
        <tr>
            <th>PRIMER APELLIDO</th>
            <th><input type="text" name="nuevo_apellido_1" id="nuevo_apellido_1" value="<?php echo $reg['apellido_1'] ?>"></th>
        </tr>
        <tr>
            <th>SEGUNDO APELLIDO</th>
            <th><input type="text" name="nuevo_apellido_2" id="nuevo_apellido_2" value="<?php echo $reg['apellido_2'] ?>"></th>
        </tr>
        <tr>
            <th>LOCALIDAD</th>
            <th><input type="text" name="nuevo_localidad" id="nuevo_localidad" value="<?php echo $reg['localidad'] ?>"></th>
        </tr>
        <tr>
            <th>CODIGO POSTAL</th>
            <th><input type="text" name="nuevo_codPostal" id="nuevo_codPostal" value="<?php echo $reg['codPostal'] ?>"></th>
        </tr>
        <tr>
            <th>TELEFONO</th>
            <th><input type="text" name="nuevo_telefono" id="nuevo_telefono" value="<?php echo $reg['telefono'] ?>"></th>
        </tr>
        <tr>
            <th>TELEFONO FAMILIAR</th>
            <th><input type="text" name="nuevo_telefonoFamiliar" id="nuevo_telefonoFamaliar" value="<?php echo $reg['telefonoFamiliar'] ?>"></th>
            
        </tr>
        </table> 
        <input type="hidden" name="id" value="<?php echo $reg['idPaciente']; ?>">
        <input type="submit" value="MODIFICAR" class="modiButton">
    </form>
    <?php
    
    } else {
        echo "No se ha podido modificar, ha habido un error en la modificacion.";
    }
    ?>
    </div>
</body>
</html>