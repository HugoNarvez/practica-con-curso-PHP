<?php

$servidor= "localhost";
$usuario="root";
$pass="";
$bd="pagina";

$conectar=mysqli_connect($servidor, $usuario, $pass, $bd);
if($conectar -> connect_error){
    die ('error al conectar la base de datos'.$conectar->connect_erron);
 
}
else{
    //echo"conexion exitosa";
}
    

?>

