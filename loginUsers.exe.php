<?php

$servername = "localhost:3307";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$login        = $_POST['cpf_cliente'];
$acao         = $_POST['acaoLogin'];

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
      $vereficaUser = "SELECT nomeCliente FROM cliente WHERE cpf_cliente = $login_cookie";
      $result = mysqli_query($conn, $vereficaUser);
      $nome = mysqli_fetch_fields($result);

      foreach ($nome as $val) {
        $imprime = printf("Name:     %s\n", $val->nomeCliente);
      } 

      /* $nome = mysqli_fetch_array($vereficaUser); */

      session_start();
      setcookie("login", $login, time()+3600); /* expira em 1 hora */
      setcookie("nickUser", $imprime, time()+3600); /* expira em 1 hora */
      header("Location:index.php");
    }
}

// fecha a conexão
mysqli_close($conn);

?>
