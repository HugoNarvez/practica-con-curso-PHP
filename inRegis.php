<?php
error_reporting(0);
include "include/conecta.php";



if(isset($_POST['bntregistrar'])){
    
    $nom= $_POST['nom'];
    $ap= $_POST['ap'];
    $gen=$_POST['ge'];
    $cor =$_POST['cor'];
    $us= $_POST['user'];
    $cont=$_POST['cont'];


    $selec="SELECT * FROM sesion WHERE Correo = '$cor' || User ='$us'";
    $valej= $conectar->query($selec);
    if($valej->num_rows >0){
        ?>
        <h3 class="ok"> Tu User o Correo ya se encuentran registrados </h3>
        <?php

    }
    else{

    

    $inser ="INSERT INTO  sesion ( `Nombre`, `Apellidos`, `Genero`, `Correo`, `User`, `Contraseña`) VALUES ('$nom','$ap','$gen','$cor','$us','$cont')";
    $guardar = $conectar->query($inser);

    if($guardar){
        ?>
        <h3 class="ok"> te has registrado correctamente </h3>
        <?php
    }else {
        ?>
        <h3 class="bad"> NO te has registrado correctamente </h3>
        <?php
    
    }

}



  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/stilos.css">
    <!-- archivo de validacion de los campos -->
    <link rel="stylesheet" href="js/validar_campos.js">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">



    <title>Registrarse</title>

</head>
<body>
    <!--Main-->
    <div class="container col-12 p-5 mt-5 ">

        <div class="row">

           


            <!--Formulario-->
            <div class="container col-6 border shadow p-2">
                <h1 class="text-center mt-3"></h1>
                <h3 class="text-center">Registro</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >

                    

                    <label for="Nombre" class="form-label mt-4 ms-5">Nombre(s)</label>
                    <input type="text" class="form-control w-75 mx-auto" id="Nombres" name="nom" placeholder="Ingresa tu nombre" required><br><br>

                    <label for="Apeliidos" class="form-label mt-4 ms-5">Apellidos</label>
                    <input type="text" class="form-control w-75 mx-auto" id="Apellidos" name="ap" placeholder="Ingresa tus apellidos" required><br><br>

                    <label for="N_user" class="form-label mt-4 ms-5">Genero</label>
                    <input type="text" class="form-control w-75 mx-auto" id="nickname2" name="ge" placeholder="Genero" required><br><br>

                    <label for="Mail" class="form-label mt-4 ms-5">Correo Electronico</label>
                    <input type="email" class="form-control w-75 mx-auto" id="mail" name="cor" placeholder="name@example.com" required><br><br>

                    <label for="N_user" class="form-label mt-4 ms-5">User</label>
                    <input type="text" class="form-control w-75 mx-auto" id="nickname2" name="user" placeholder="Ingresa tu nombre de usuario" required><br><br>

                    <label for="Password" class="form-label mt-4 ms-5">Contraseña</label>
                    <input type="password" class="form-control w-75 mx-auto" id="password" name="cont" placeholder="Ingresa tu contraseña" required><br><br>

                   
                        
                        </div><br>

                  

                           <div class=" d-grid gap-2 col-6 mx-auto mb-5">
                             <button class="btn2 btn-danger" type="submit"  name="bntregistrar" value="registrar" >Iniciar Sesion</button>
                            
                              
                               
                            </div>
                          
<!-- redes -->

            </form>
            </div>
            <?php echo $mensaje; ?>
        </div>

    </div>
    


    <script src="js/bootstrap.js"></script>
    <script src="js/validar_campos.js"></script>
</body>
</html>






