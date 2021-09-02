<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Paciente</title>
    <link rel="stylesheet" href="../main.css">
</head>
<body>
    <style>
        body {
            background-color: #6E6E6E;
            margin: auto;
            width: 700px;
            height: 500px;
        }
    #containerTrue{
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
    //abrir conexion, insertar datos y close
    $conexion = mysqli_connect("localhost", "root", "1234anto", "clinica") or
        die("Problemas en la conexion.");
    
    //insertar datos en base de datos clinica de tabla pacientes
    mysqli_query($conexion, "insert into pacientes(dni,nombre,apellido_1,apellido_2,localidad,codPostal,telefono,telefonoFamiliar) values ('$_POST[dni]','$_POST[nombre]','$_POST[apellido_1]','$_POST[apellido_2]','$_POST[localidad]',$_POST[codPostal],'$_POST[telefono]','$_POST[telefonoFamiliar]')")
        or die("Problemas en el Select: " . mysqli_error($conexion));

    //cerramos conexion
    mysqli_close($conexion);
    echo '<div id="containerTrue">';
    echo "Usuario insertado correctamente";
    echo '<a href="../MENU/altas.html"><div class="myButton3">VOLVER</div></a>';
    echo '</div>';
    ?>
</body>
</html>