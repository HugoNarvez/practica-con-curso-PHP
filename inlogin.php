<?php
error_reporting(0);

include "include/conecta.php";
include "include/plogin.php";



?>



<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <!-- caractetres con comillas , acentos etc -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- codigo conpatible con los navegadores -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- la resolucion de la pagina -->
    <meta name="author" content=" dlyp diseño de marketing digital ">
    <!-- palabras clave -->
    <meta name="Keyword" content="....">
    <!-- caracteres  -->
    <meta name="description" content="165">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.1.min,js.js"></script>
    <link rel="stylesheet" href="js/validar_campos.js">

</head>
<body> 
   <div class="container col-12 p-5 mt-5 ">

      <div class="row">



          <!--Formulario-->
          <div class="container col-6 border shadow p-2">
              <h1 class="text-center mt-3">Inicio de sesion</h1>
              
              <form name="login" id="login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">


                  <label for="N_user" class="form-label mt-4 ms-5">Escribe tu  User</label>
                  <input type="text" class="form-control w-75 mx-auto" id="nickname" name="usuario" placeholder="Ingresa tu nombre de usuario" required><br><br>

                  <label for="Password" class="form-label mt-4 ms-5"> Escribe tu Contraseña</label>
                  <input type="password" class="form-control w-75 mx-auto" id="password" name="contra" placeholder="Ingresa tu contraseña" required><br><br>

                  <div class="row mx-auto text-center">
                    <div class="col mx-auto">
                        <a href="recuperar.html" target="_blank">Recuperar Contraseña </a>

                    </div>
                    <div class="col">
                        <a href="inRegis.php" >Registrarse </a>

                    </div>
                    
               

                  <div class=" d-grid gap-2 col-6 mx-auto mb-5">
                      <button class="btn btn-danger" type="submit" Value="entrar" name="btnsesion" onclick="validar()";>Iniciar Sesion</button>
                    </div>
              </form>
          </div>
      </div>
     

    </div>
    <?php// echo $mensaje; //?>

                 

</body>
</html>