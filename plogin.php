
<?php

   include "conecta.php";

   if(isset($_POST['btnsesion'])){


    $nu=$conectar->real_escape_string($_POST['usuario']);
    $pas=$conectar->real_escape_string($_POST['contra']);
    

    $consulta="SELECT * FROM sesion WHERE User='$nu' and Contraseña = '$pas'";
    if($result=$conectar->query($consulta)){
        while($row=$result->fetch_array()){
            $userok =$row['User'];
            $passok =$row['Contraseña'];

        }
        $result->close();

    }
    $conectar->close();
      if(isset($nu)  && isset($pas)){
          if($nu==$userok && $pas== $passok){
            $_SESSION['login']= TRUE;
            $_SESSION['Usuario']= $usuario;

            header("location:inRegis.php");

            
         

        }
        else{
            
            
            //header("location:recuperar.html");
            ?>
            <h3 class="bad">  ve al apartado de "registrare" para poder acceder y despues inicia sesion</h3>
            <?php
        
       }
    }
   
 }
    
    
?>
