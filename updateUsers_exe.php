<!-- Acesso ao BD-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";

/* $id      = $_POST['Id']; */
$nomeCliente = $_POST['nomeCliente'];
$sobrenomeCliente = $_POST['sobrenomeCliente'];
$email = $_POST['email'];
$dtNasc  = $_POST['DataNasc'];



if ($dtNasc != "") {
  if (strpos($dtNasc, "-") != false) {
    $strData = explode('-', $dtNasc);
  } else {
    $strData = explode('/', $dtNasc);
  }

  $ano = $strData[2];
  $mes = $strData[1];
  $dia = $strData[0];

  $nova_data = $ano . '-' . $mes . '-' . $dia;
} else
  $nova_data = "";

//Criptografa Senha
$md5Senha = md5($_POST['senha']);

// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica conexão
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Configura para trabalhar com caracteres acentuados do português
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, 'SET character_set_connection=utf8');
mysqli_query($conn, 'SET character_set_client=utf8');
mysqli_query($conn, 'SET character_set_results=utf8');

// Faz Select na Base de Dados
$sql = "UPDATE professor SET
  nomeCliente = '$nomeCliente',
  sobrenomeCliente = '$sobrenomeCliente',
  email = '$email',
  DataNasc = '$dtNasc',
  senha = '$md5Senha'
WHERE
  cpf_cliente = $id";

echo "<div class='efetuar-cadastro'>";
if ($result = mysqli_query($conn, $sql)) {
  echo "Um registro alterado!";
} else {
  echo "Erro executando UPDATE: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn); //Encerra conexao com o BD

?>
</div>
</div>