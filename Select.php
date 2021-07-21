<?php

include "model/config.php";

$usuario = addslashes($_POST["username"]);
$pass = addslashes($_POST["password"]);

$query = "SELECT * FROM usuario WHERE username = '$usuario' and PASSWORD = '$pass'";

$consulta = mysqli_query($conn, $query);

if(mysqli_num_rows($consulta)==1){
   
    session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
    
    header('location: pesquisa.php');
    
   
}else{
    header('location:index.php?erro=1');
    
}
?>