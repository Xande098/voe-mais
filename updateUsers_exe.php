<!-- Acesso ao BD-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";

//cliente
/* $cpf_cliente = $_POST['cpf_cliente']; */
$nomeCliente = $_POST['nomeCliente'];
$sobrenomeCliente = $_POST['sobrenomeCliente'];
$email = $_POST['email'];
$dtNasc  = $_POST['DataNasc'];
/* $id_endereco  = $_POST['id_endereco'];
$id_telefone  = $_POST['id_telefone']; */
$login_cookie = $_COOKIE['login'];

//endereco
/* $id_pais = $_POST['id_pais'];
$id_bairro = $_POST['id_bairro'];
$id_logradouro = $_POST['id_logradouro']; */
$nomeRua = $_POST['nomeRua'];
$numRua = $_POST['numRua'];

// pais
$nomePais = $_POST['nomePais'];
/* $id_estado = $_POST['id_estado']; */

// estado
$nomeEstado = $_POST['nomeEstado'];
/* $id_cidade = $_POST['id_cidade']; */

// cidade
$nomeCidade = $_POST['nomeCidade'];

// bairro
$nomeBairro = $_POST['nomeBairro'];

// telefone
/* $id_tipoTel = $_POST['id_tipoTel']; */
$numTel = $_POST['numTel'];

// tipo_logradouro
$tipoLogradouro = $_POST['tipoLogradouro'];

// tipo_telefone
$tipoTel = $_POST['tipoTel'];



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
$sqlClient = "UPDATE `cliente` as cl, `endereco` as en, `pais` as p, `estado` as es, `cidade` as ci, `bairro` as ba, `telefone` as te, `tipo_logradouro` as tl, `tipo_telefone` as tt SET
  nomeCliente = `$nomeCliente`,
  sobrenomeCliente = `$sobrenomeCliente`,
  email = `$email`,
  dataNasc = `$dtNasc`,
  senha = `$md5Senha`,

  FROM cliente cl
  
  INNER JOIN `endereco` as en
  ON (cl.`id_endereco` = en.`id_endereco`)
  SET
  nomeRua = `$nomeRua`,
  numRua = `$numRua`,

  FROM endereco as en

  INNER JOIN `pais` as p
  ON (en.`id_pais` = p.`id_pais`)
  SET
  nomePais = `$nomePais`,

  FROM pais as p

  INNER JOIN `estado` as es
  ON (p.`id_estado` = es.`id_estado`)
  SET
  nomeEstado = `$nomeEstado`,

  FROM estado as es

  INNER JOIN `cidade` as ci
  ON (es.`id_cidade` = ci.`id_cidade`)
  SET
  nomeCidade = `$nomeCidade`,

  FROM cidade as ci

  INNER JOIN `bairro` as ba
  ON (en.`id_bairro` = ba.`id_bairro`)
  SET
  nomeBairro = `$nomeBairro`,

  FROM bairro as ba

  INNER JOIN `telefone` as te
  ON cl.`id_telefone` = te.`id_telefone`
  SET
  numTel = `$numTel`,

  FROM telefone as te

  INNER JOIN `tipo_logradouro` as tl
  ON en.`id_logradouro` = tl.`id_logradouro`
  SET
  tipoLogradouro = `$tipoLogradouro`,

  FROM tipo_logradouro as tl

  INNER JOIN `tipo_telefone` as tt
  ON tt.`id_tipoTel` = tt.`id_tipoTel`
  SET
  tipoTel = `$tipoTel`,

  FROM tipo_telefone as tt

  WHERE cpf_cliente = $login_cookie";


echo "<div class='efetuar-cadastro'>";
if ($result = mysqli_query($conn, $sqlClient)) {
  echo "Um registro alterado!";
} else {
  echo "Erro executando UPDATE: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn); //Encerra conexao com o BD

?>