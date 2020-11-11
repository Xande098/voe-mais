	<!-- Acesso ao BD-->
	<?php

  $servername = "localhost:3306";
  $username = "userVoe";
  $password = "1234";
  $database = "voemais";

  $login_cookie = $_COOKIE['login'];

  // Cria conexão
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Verifica conexão
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Faz Select na Base de Dados
  /* $sql = "DELETE FROM professor WHERE CodProfessor = $login_cookie"; */

  $sql = "DELETE `cliente`, `endereco`, `pais`, `estado`, `cidade`, `telefone`, `tipo_telefone`, `bairro`, `tipo_logradouro`
  FROM `cliente`
  INNER JOIN `endereco` ON `cliente`.`id_endereco` = `endereco`.`id_endereco`
  INNER JOIN `pais` ON `endereco`.`id_pais` = `pais`.`id_pais`
  INNER JOIN `estado` ON `pais`.`id_estado` = `estado`.`id_estado`
  INNER JOIN `cidade` ON `estado`.`id_cidade` = `cidade`.`id_cidade`
  INNER JOIN `bairro` ON `endereco`.`id_bairro` = `bairro`.`id_bairro`
  INNER JOIN `telefone` ON `cliente`.`id_telefone` = `telefone`.`id_telefone`
  INNER JOIN `tipo_logradouro` ON `endereco`.`id_logradouro` = `tipo_logradouro`.`id_logradouro`
  INNER JOIN `tipo_telefone` ON `telefone`.`id_tipoTel` = `tipo_telefone`.`id_tipoTel`
  WHERE cpf_cliente = $login_cookie";

  echo "<div class='efetuar-cadastro'>";
  if ($result = mysqli_query($conn, $sql)) {
    echo "Um registro excluído!";
  } else {
    echo "Erro executando DELETE: " . mysqli_error($conn);
  }
  echo "</div>";
  mysqli_close($conn);  //Encerra conexao com o BD

  ?>
  </div>
  
<!-- Volta para a home depois de ter feito o form -->
<?php require 'logout.php'; ?>

<body onload='window.history.back();'>