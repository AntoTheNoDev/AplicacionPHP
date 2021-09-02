<link rel="stylesheet" href="../main.css">
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
#containerFalse{
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
    //iniciando conexion
    $conexion = mysqli_connect("localhost", "root", "1234anto", "clinica") or
    die("Problemas con la conexion:");

    //declarando variables
    $id = $_POST['id'];
    $nuevo_dni=$_POST['nuevo_dni'];
    $nuevo_nombre=$_POST['nuevo_nombre'];
    $nuevo_apellido_1=$_POST['nuevo_apellido_1'];
    $nuevo_apellido_2=$_POST['nuevo_apellido_2'];
    $nuevo_localidad=$_POST['nuevo_localidad'];
    $nuevo_codPostal=$_POST['nuevo_codPostal'];
    $nuevo_telefono=$_POST['nuevo_telefono'];
    $nuevo_especialidad=$_POST['nuevo_especialidad'];
    
    $consulta = "UPDATE medicos SET dni='$nuevo_dni', 
                                    nombre='$nuevo_nombre',
                                    apellido_1='$nuevo_apellido_1',
                                    apellido_2='$nuevo_apellido_2',
                                    localidad='$nuevo_localidad',
                                    codPostal=$nuevo_codPostal,
                                    telefono='$nuevo_telefono',
                                    especialidad='$nuevo_especialidad'
                                    WHERE idMedico=$id";
  if(mysqli_query($conexion,$consulta)){
      echo '<div id="containerTrue">';
      echo "Usuario modificado correctamente";
      echo '<a href="modificar_medico.php"><div class="myButton3">VOLVER</div></a>';
      echo '</div>';
	}else{
		echo '<div id="containerFalse">';
    echo "Error al modificar";
    echo '<a href="modificar_medico.php"><div class="myButton3">VOLVER</div></a>';
    echo '</div>';
	}
?>