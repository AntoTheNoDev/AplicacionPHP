<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <div id="menu">
        <ul>
            <li>Centro de operaciones</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>
    <div id="user_name">
    <section>
        <h1>Bienvenido <?php echo $user->getNombre();  ?> elige una de las opciones:</h1>
    </section>
    </div>
    <a href="MENU/altas.html" class="myButton">ALTAS</a>
    <a href="MENU/modificar.html" class="modiButton">MODIFICAR</a>
    <a href="MENU/bajas.html" class="bajasButton">BAJAS</a>
</body>
</html>