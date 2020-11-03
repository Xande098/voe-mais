<!-- Acesso em:-->
<?php

/* date_default_timezone_set("America/Sao_Paulo");
$data = date("d/m/Y H:i:s", time());
echo "<p class='w3-small' > ";
echo "Acesso em: ";
echo $data;
echo "</p> " */
?>

<!-- Acesso ao BD-->
<?php

$servername = "localhost:3307";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$tipoTel = $_POST['tipoTel'];
$celular = $_POST['numTel'];
/* $id_tipoTel = $_POST['id_tipoTel']; */
$tipoLogradouro = $_POST['tipoLogradouro'];
$nomeBairro = $_POST['nomeBairro'];
$nomeCidade = $_POST['nomeCidade'];
$nomeEstado = $_POST['nomeEstado'];
/* $id_cidade = $_POST['id_cidade']; */
$nomePais = $_POST['nomePais'];
/* $id_estado = $_POST['id_estado']; */
$nomeRua = $_POST['nomeRua'];
$numRua = $_POST['numRua'];
/* $id_logradouro = $_POST['id_logradouro']; */
/* $id_bairro = $_POST['id_bairro']; */
/* $id_pais = $_POST['id_pais']; */
$login   = $_POST['cpf_cliente'];
$nomeCliente = $_POST['nomeCliente'];
$sobrenomeCliente = $_POST['sobrenomeCliente'];
$email = $_POST['email'];
$dtNasc  = $_POST['DataNasc'];
/* $id_endereco  = $_POST['id_endereco']; */
/* $id_telefone  = $_POST['id_telefone']; */
$acao    = $_POST['acaoForm'];

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
/* $conn = mysqli_connect($servername, $username, $password, $database); */

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


// Tipo de telefone pode ser: 'Celular', 'Trabalho', 'Casa', 'Recado'
// Faz Select na Base de Dados
$sql = "INSERT INTO tipo_telefone (default, tipoTel) VALUES ('$tipoTel')";
/* $sql = "INSERT INTO telefone (numTel, id_tipoTel) VALUES ('$celular','$id_tipoTel')"; */
$sql = "INSERT INTO telefone (default, id_tipoTel, numTel) VALUES (
  (SELECT MAX(id_tipoTel) FROM tipo_telefone),
  '$celular')";
$sql = "INSERT INTO tipo_logradouro (default, tipoLogradouro) VALUES ('$tipoLogradouro')";
$sql = "INSERT INTO bairro (default, nomeBairro) VALUES ('$nomeBairro')";
$sql = "INSERT INTO cidade (default, nomeCidade) VALUES ('$nomeCidade')";
/* $sql = "INSERT INTO estado (nomeEstado, id_cidade) VALUES ('$nomeEstado', '$id_cidade')"; */
$sql = "INSERT INTO estado (default, id_cidade, nomeEstado) VALUES (
  (SELECT MAX(id_cidade) FROM cidade),
  '$nomeEstado')";
/* $sql = "INSERT INTO pais (nomePais, id_estado) VALUES ('$nomePais', '$id_estado')"; */
$sql = "INSERT INTO pais (default, id_estado, nomePais) VALUES (
  (SELECT MAX(id_estado) FROM estado),
  '$nomePais')";
/* $sql = "INSERT INTO endereco (nomeRua, numRua, id_logradouro, id_bairro, id_pais) VALUES ('$nomeRua', '$numRua', '$id_logradouro', '$id_bairro', '$id_pais')"; */
$sql = "INSERT INTO endereco (default, id_logradouro, id_bairro, id_pais, nomeRua, numRua) VALUES (
  (SELECT MAX(id_logradouro) FROM tipo_logradouro),
  (SELECT MAX(id_bairro) FROM bairro),
  (SELECT MAX(id_pais) FROM pais),
  '$nomeRua',
  '$numRua')";
/* $sql = "INSERT INTO cliente (cpf_cliente, nomeCliente, sobrenomeCliente, email, dataNasc, senha, id_endereco, id_telefone) VALUES ('$login','$nomeCliente','$sobrenomeCliente','$email','$dtNasc', '$md5Senha', '$id_endereco', '$id_telefone')"; */
$sql = "INSERT INTO cliente (id_endereco, id_telefone, cpf_cliente, nomeCliente, sobrenomeCliente, email, dataNasc, senha) VALUES (
  (SELECT MAX(id_endereco) FROM endereco),
  (SELECT MAX(id_telefone) FROM telefone),
  '$login',
  '$nomeCliente',
  '$sobrenomeCliente',
  '$email',
  '$dtNasc',
  '$md5Senha')";
/* $sql = "INSERT INTO professor (Nome, Celular, DataNasc, Login, Senha) VALUES ('$nome','$celular','$dtNasc','$login','$md5Senha')"; */

if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='não-sei'>";
  if ($acao == "Contratar")
    echo "Um registro adicionado!";
  else
    echo "Um registro alterado!";
} else {
  echo "Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

?>