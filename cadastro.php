<?php 
include 'conexao.php';


if(isset($_POST['cadastrar'])):
  $login = mysqli_escape_string($conexao,$_POST['login']);
  $senha = mysqli_escape_string($conexao,MD5($_POST['senha']));

$sql = "INSERT INTO usuario (login,senha) VALUES ('$login', '$senha')";

 if(mysqli_query($conexao, $sql)):
  header("Location: login2.html?sucesso");
 
 else:
    header("Location: cadastro.php");
endif;

endif;

?>

