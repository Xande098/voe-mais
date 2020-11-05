<?php

$servername = "localhost:3307";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$login   = $_POST['cpf_cliente'];
$acao    = $_POST['acaoForm'];

//Criptografa Senha
$md5Senha = md5($_POST['senha']);


// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $database);


/* $db = mysql_select_db($database); */

  if (isset($acao)) {

    $sql =("SELECT * FROM cliente WHERE cpf_cliente =
    '$login' AND senha = '$md5Senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($sql) <= 0) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='loginUsers.php';</script>";
        die();
      } else {
        setcookie("login",$login);
        header("Location:index.php");
      }
  }
?>