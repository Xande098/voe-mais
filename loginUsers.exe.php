<?php

$servername = "localhost:3307";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$login   = $_POST['cpf_cliente'];
$name    = $_POST['nomeCliente'];
$acao    = $_POST['acaoLogin'];

//Criptografa Senha
$md5Senha = md5($_POST['senha']);


// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($acao)) {
  $sql = ("SELECT * FROM cliente WHERE cpf_cliente =
    '$login' AND senha = '$md5Senha'") or die("erro ao selecionar");
  $res = mysqli_query($conn, $sql);
  $total = mysqli_num_rows($res);
    if ($total <= 0) {
      echo"<script language='javascript' type='text/javascript'>
      alert('Login e/ou senha incorretos');window.location
      .href='index.php';</script>";
      die();
    } else {
      setcookie("login", $login, time()+3600); /* expira em 1 hora */
      header("Location:index.php");
    }
}

// fecha a conexão
mysqli_close($conn);

?>
