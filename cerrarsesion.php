<?php
    //iniciamos la sesión
    session_start();
    //La cerramos definitivamente
    session_destroy();
    //Y llevamos al usuario a la página de inicio
    header('Location: index.php');
?>