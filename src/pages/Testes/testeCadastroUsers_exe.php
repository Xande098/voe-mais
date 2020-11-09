<!-- Acesso ao BD-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$tipoLogradouro  = $_POST['tipoLogradouro'];
$tipoTel  = $_POST['tipoTel'];


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
$sql = "INSERT INTO cliente (tipoLogradouro, tipoTel) VALUES ('$tipoLogradouro','$tipoTel')";
echo "<div class='efetuar-cadastro'>";
if ($result = mysqli_query($conn, $sql)) {
  echo "Um registro adicionado!";
} else {
  echo "Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

?>

<!-- Começa aqui -->

<!-- Acesso ao BD tabela tipo_telefone-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$tipoTel  = $_POST['tipoTel'];

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
$sql = "INSERT INTO tipo_telefone (tipoTel) VALUES ('$tipoTel')";
echo "<div class='efetuar-cadastro'>";
if ($result = mysqli_query($conn, $sql)) {
  echo "1 - Um registro adicionado!";
} else {
  echo "1 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD


/* $servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$tipoTel = $_POST['tipoTel'];
$acao    = $_POST['acaoForm'];


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
$sql = "INSERT INTO tipo_telefone (id_tipoTel, tipoTel) VALUES ('default','$tipoTel')";
if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "1 - Um registro adicionado!";
  else
    echo "1 - Um registro alterado!";
} else {
  echo "1 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  */ //Encerra conexao com o BD

?>

<!-- Acesso ao BD tabela telefone-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$celular = $_POST['numTel'];

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
$sql = "INSERT INTO telefone (numTel) VALUES ('$celular')";
echo "<div class='efetuar-cadastro'>";
if ($result = mysqli_query($conn, $sql)) {
  echo "2 - Um registro adicionado!";
} else {
  echo "2 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

/* $servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$celular = $_POST['numTel'];
$acao    = $_POST['acaoForm'];

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
$sql = "INSERT INTO telefone (id_telefone, id_tipoTel, numTel) VALUES (
  default,
  default,
  '$celular')";
if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "2 - Um registro adicionado!";
  else
    echo "2 - Um registro alterado!";
} else {
  echo "2 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn); */  //Encerra conexao com o BD

?>

<!-- Acesso ao BD tabela tipo_logradouro-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$tipoLogradouro  = $_POST['tipoLogradouro'];


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
$sql = "INSERT INTO tipo_logradouro (tipoLogradouro) VALUES ('$tipoLogradouro')";
echo "<div class='efetuar-cadastro'>";
if ($result = mysqli_query($conn, $sql)) {
  echo "3 - Um registro adicionado!";
} else {
  echo "3 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD


/* $servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$tipoLogradouro = $_POST['tipoLogradouro'];
$acao    = $_POST['acaoForm'];


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

$sql = "INSERT INTO tipo_logradouro (id_logradouro, tipoLogradouro) VALUES (default,'$tipoLogradouro')";
if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "3 - Um registro adicionado!";
  else
    echo "3 - Um registro alterado!";
} else {
  echo "3 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn); */  //Encerra conexao com o BD

?>

<!-- Acesso ao BD tabela bairro-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$nomeBairro = $_POST['nomeBairro'];
$acao    = $_POST['acaoForm'];

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
$sql = "INSERT INTO bairro (id_bairro, nomeBairro) VALUES (default,'$nomeBairro')";
if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "4 - Um registro adicionado!";
  else
    echo "4 - Um registro alterado!";
} else {
  echo "4 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

?>

<!-- Acesso ao BD tabela cidade-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$nomeCidade = $_POST['nomeCidade'];
$acao    = $_POST['acaoForm'];

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
$sql = "INSERT INTO cidade (id_cidade, nomeCidade) VALUES (default,'$nomeCidade')";
if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "5 - Um registro adicionado!";
  else
    echo "5 - Um registro alterado!";
} else {
  echo "5 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

?>

<!-- Acesso ao BD tabela estado-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$nomeEstado = $_POST['nomeEstado'];
$acao    = $_POST['acaoForm'];


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
$sql = "INSERT INTO estado (id_estado, id_cidade, nomeEstado) VALUES (
  default,
  (SELECT MAX(id_cidade) FROM cidade),
  '$nomeEstado')";
if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "6 - Um registro adicionado!";
  else
    echo "6 - Um registro alterado!";
} else {
  echo "6 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

?>

<!-- Acesso ao BD tabela pais-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$nomePais = $_POST['nomePais'];
$acao    = $_POST['acaoForm'];


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
$sql = "INSERT INTO pais (id_pais, id_estado, nomePais) VALUES (
  default,
  (SELECT MAX(id_estado) FROM estado),
  '$nomePais')";
if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "7 - Um registro adicionado!";
  else
    echo "7 - Um registro alterado!";
} else {
  echo "7 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

?>

<!-- Acesso ao BD tabela endereco-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$nomeRua = $_POST['nomeRua'];
$numRua = $_POST['numRua'];
$acao    = $_POST['acaoForm'];


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
$sql = "INSERT INTO endereco (id_endereco, id_logradouro, id_bairro, id_pais, nomeRua, numRua) VALUES (
  'default',
  (SELECT id_logradouro FROM tipo_logradouro),
  (SELECT MAX(id_bairro) FROM bairro),
  (SELECT MAX(id_pais) FROM pais),
  '$nomeRua',
  '$numRua')";
if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "8 - Um registro adicionado!";
  else
    echo "8 - Um registro alterado!";
} else {
  echo "8 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

?>

<!-- Acesso ao BD tabela cliente-->
<?php

$servername = "localhost:3306";
$username = "userVoe";
$password = "1234";
$database = "voemais";


$login   = $_POST['cpf_cliente'];
$nomeCliente = $_POST['nomeCliente'];
$sobrenomeCliente = $_POST['sobrenomeCliente'];
$email = $_POST['email'];
$dtNasc  = $_POST['DataNasc'];
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

/* $sql = "INSERT INTO cliente (cpf_cliente, nomeCliente, sobrenomeCliente, email, dataNasc, senha, id_endereco, id_telefone) VALUES ('$login','$nomeCliente','$sobrenomeCliente','$email','$dtNasc', '$md5Senha', '$id_endereco', '$id_telefone')"; */
$sql = "INSERT INTO cliente (cpf_cliente, id_endereco, id_telefone, nomeCliente, sobrenomeCliente, email, dataNasc, senha) VALUES (
  '$login',
  (SELECT MAX(id_endereco) FROM endereco),
  (SELECT MAX(id_telefone) FROM telefone),
  '$nomeCliente',
  '$sobrenomeCliente',
  '$email',
  '$dtNasc',
  '$md5Senha')";
/* $sql = "INSERT INTO professor (Nome, Celular, DataNasc, Login, Senha) VALUES ('$nome','$celular','$dtNasc','$login','$md5Senha')"; */

if ($result = mysqli_query($conn, $sql)) {
  echo "<div class='efetuar-cadastro'>";
  if ($acao == "Contratar")
    echo "9 - Um registro adicionado!";
  else
    echo "9 - Um registro alterado!";
} else {
  echo "9 - Erro executando INSERT: " . mysqli_error($conn);
}
echo "</div>";
mysqli_close($conn);  //Encerra conexao com o BD

?>

<!-- Volta para a home depois de ter feito o form -->
<!-- <body onload='window.history.back();'> -->
