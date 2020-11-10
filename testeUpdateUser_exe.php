<!-- Acesso ao BD-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


//cliente
$cpf_cliente = $_POST['cpf_cliente'];
$nomeCliente = $_POST['nomeCliente'];
$sobrenomeCliente = $_POST['sobrenomeCliente'];
$email = $_POST['email'];
$dtNasc  = $_POST['DataNasc'];
$login_cookie = $_COOKIE['login'];

//endereco
$nomeRua = $_POST['nomeRua'];
$numRua = $_POST['numRua'];



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
/* $sqlClient = "UPDATE cliente SET
  nomeCliente = '$nomeCliente',
  sobrenomeCliente = '$sobrenomeCliente',
  email = '$email',
  dataNasc = '$dtNasc',
  senha = '$md5Senha'
  WHERE cpf_cliente = $login_cookie"; */


$sqlClient = "UPDATE `cliente`.*
SET
`cliente`.nomeCliente = `$nomeCliente`,
`cliente`.sobrenomeCliente = `$sobrenomeCliente`,
`cliente`.email = `$email`,
`cliente`.dataNasc = `$dtNasc`,
`cliente`.senha = `$md5Senha`,
INNER JOIN `endereco` ON `cliente`.`id_endereco` = `endereco`.`id_endereco`
SET
`endereco`.nomeRua = `$nomeRua`,
`endereco`.numRua = `$numRua`,
WHERE cpf_cliente = $login_cookie";


/* $sqlClient = "SELECT `cliente`.*, `endereco`.*, `pais`.*, `estado`.*, `cidade`.*, `telefone`.*, `tipo_telefone`.*, `bairro`.*, `tipo_logradouro`.* FROM `cliente`
    INNER JOIN `endereco` ON `cliente`.`id_endereco` = `endereco`.`id_endereco`
    INNER JOIN `pais` ON `endereco`.`id_pais` = `pais`.`id_pais`
    INNER JOIN `estado` ON `pais`.`id_estado` = `estado`.`id_estado`
    INNER JOIN `cidade` ON `estado`.`id_cidade` = `cidade`.`id_cidade`
    INNER JOIN `bairro` ON `endereco`.`id_bairro` = `bairro`.`id_bairro`
    INNER JOIN `telefone` ON `cliente`.`id_telefone` = `telefone`.`id_telefone`
    INNER JOIN `tipo_logradouro` ON `endereco`.`id_logradouro` = `tipo_logradouro`.`id_logradouro`
    INNER JOIN `tipo_telefone` ON `telefone`.`id_tipoTel` = `tipo_telefone`.`id_tipoTel`
    WHERE cpf_cliente = $login_cookie"; */




echo "<div class='efetuar-cadastro'>";
if ($result = mysqli_query($conn, $sqlClient)) {
  echo "Um registro alterado!";
} else {
  echo "Erro executando UPDATE: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn); //Encerra conexao com o BD

?>