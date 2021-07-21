<?php 

include "model/config.php";

$nome = $_POST["username"];
$sobrenome = $_POST["password"];


$sql = "INSERT INTO usuario 
VALUES ('','$nome', '$sobrenome')";

//$Login = "INSERT INTO usuario 
//VALUES ('','$login', '$senha')";

$query_cadastros = mysqli_query($conn,$sql);
//$query_login = mysqli_query($conn,$Login);

if($query_cadastros){
    echo "
    <script>
    alert('cadastrado com sucesso');
    </script>";
    header('location:Cadastro.html');
    
}else{
    echo "
    <script>
    alert('Erro ao cadastrar');
    </script>";
    header('location:Cadastramento.php?');
    }

?>

