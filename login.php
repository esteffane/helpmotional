<?php 
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$conexao = mysqli_connect('localhost','root','vazio');
$dbname = mysql_select_db('cadastro');
  if (isset($entrar)) {
           
    $verifica = mysql_query("SELECT * FROM usuario WHERE login = 
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
      }
  }
?>
