<?php 

include "model/config.php";
include "CardDetails.php";
if(isset($_SESSION['login']))

if(isset($_POST['nome']))
if(isset($_POST['cartaid']))
if(isset($_POST['preco']))

$cartaid = $_POST["cartaid"];
$cartanome = $_POST["nome"];
$preco = $_POST["preco"];
$cliente = $_SESSION["usuario"];

$sql = "INSERT INTO card(id, cartaid, cartanome, preco, usuario) 
VALUES ('','$cartaid', '$cartanome', '$preco', '$cliente')";

$query_cadastros = mysqli_query($conn,$sql);

if($query_cadastros){
    echo "
    <script>
    alert('Adicionado com Sucesso');
    </script>";
    header('location:pesquisa.php');
    
}else{
    echo "ERRO ALGUMA COISA";
   

    }

?>

