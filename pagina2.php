<?php
    //Arrancamos la sesión en esta página para poder usar las variables de sesión
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página 2 Tarea Online IAW</title>
    <style>
        /*Damos formato y estilos con css*/
        body, a{
            background-color:ivory;
            text-align:center;
        }
        div{            
            padding:5px;
            position:absolute;
            top:50%;
            left:50%;
            width:500px;
            margin-left:-270px;
            height:200px;
            margin-top:-120px;
            border:1px solid #808080;
            padding:5px;
        }
        b{
            font-family: helvetica;
            font-style: italic;
            color:red;
        }
    </style>
</head>
<body>
    <div>
        <!--Sacamos por pantalla un mensaje que incluye las dos variables de sesión que creamos en la otra página-->
        <h1>Página 2 Tarea Online IAW Tema 5</h1>
        <h3>Bienvenido <b> <?php echo $_SESSION['usuarioValidado']?> </b>a la nueva sesión</h3>
        <h3>iniciada hoy <?php echo date("d-m-Y")?> a las <b><?php echo $_SESSION['horaConexion']?><b></h3>
        <!--Cuando pinche en el siguiente enlace llamamos al archivo cerrarsesión -->
        <a href="cerrarsesion.php">Cerrar Sesión</a>
    </div>
</body>
</html>