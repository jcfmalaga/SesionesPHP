<!DOCTYPE html>
<?php 
    //Arrancamos la sesión
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tarea Online Tema 5 IAW</title>
    <style>
        /*Damos formato y estilos a los h, tabla y body*/
        h1,h3{
            text-align:center;
        }
        h2{
            text-align:center;
            color:red;           
        }
        table{
            background-color:rgb(255, 204, 204);
            padding: 5px;
            border: #666 5px solid;
        }
        body {
            background-image: url(imagenes/imagen.jpg);
            background-size: 100vw 100vh;
            background-attachment: fixed;
            margin:0;
        }
    </style>
</head>
<body>
    <h1>Tarea Online Tema 5 IAW</h1>
    <h3>Introduzca usuario y contraseña</h3>
    <!-- Formulario con método post y para que se ejecute en la misma página, usamos una tabla para cuadrar
        los elementos y ponerle borde y estilos con css -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <table width="15%" align="center">
            <tr>
                <td>Nombre:</td>
                <td><label for="username"></label>
                <!-- Con required obligamos a que tenga que introducir un valor-->
                <input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><label for="password"></label>
                <input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Iniciar Sesión"></td>
            </tr>
        </table>
    </form>
    <?php
    //Si se ha pulsdo el elemento llamado submit (el botón) se ejecuta
    if (isset($_POST['submit'])){
        //Creamos los array con los valores
        $listausuarios=array("pepe","Antonio75","Emimilo_23","14Luis");
        $listacontras=array("1234","12_34","4321","1_2_3_4");
        //Iniciamos las variables que van a servir en el if si se cumplen las condiciones
        $aceptado_usuario=false;
        $aceptado_contras=false;
        //iniciamos las variables con el contenido que el usuario ha introducido en el formulario
        $usuario=$_POST["username"];
        $contras=$_POST["password"];
        //Comprobamos si el usuario está en los valores del array y si es que sí cambiamos la variable a true
        for ($i=0; $i<=3; $i++){
          if($usuario==$listausuarios[$i]){
             $aceptado_usuario=true;
          }
        }
        //Igual para las contraseñas
        for ($a=0; $a<=3; $a++){
          if($contras==$listacontras[$a]){
            $aceptado_contras=true;
          }
        }
        //Si es se han cumplido las dos condiciones entra en el if
        if ($aceptado_contras and $aceptado_usuario){
            //creamos una variable de sesión con el valor de la variable usuario
            $_SESSION['usuarioValidado']=$usuario;
            //iniciamos el reloj de nuestra zona horaria
            ini_set('date.timezone','Europe/Madrid');
            //Y creamos la variable de sesión con la hora actual
            $_SESSION['horaConexion']=date("H:i:s");
            //llamamos al archivo pagina2
            header('Location: pagina2.php');
        } else {
            //Si no se ha cumplido alguna de las condiciones sale un mensaje, espera 3 segundos y redirige a la página inicial
            echo"<br><br><br><br>";
            echo "<meta http-equiv='refresh' content='3;url=index.php'>";
            echo "<h2>Usuario o contraseña incorrecta, vuelva a introducir los datos</h2>";     
        }
    }
    ?>  
</body>
</html>