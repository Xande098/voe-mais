<div id="modal-excluir" class="hide">
  <div class="content-excluir">
    <h1>Tela de Exclusão de Usuário</h1>

    <!-- Acesso ao BD-->
    <?php

    $servername = "localhost:3306";
    $username = "userVoe";
    $password = "1234";
    $database = "voemais";


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
    $sql = "SELECT `cliente`.*, `endereco`.*, `pais`.*, `estado`.*, `cidade`.*, `telefone`.*, `tipo_telefone`.*, `bairro`.*, `tipo_logradouro`.* FROM `cliente`
      INNER JOIN `endereco` ON `cliente`.`id_endereco` = `endereco`.`id_endereco`
      INNER JOIN `pais` ON `endereco`.`id_pais` = `pais`.`id_pais`
      INNER JOIN `estado` ON `pais`.`id_estado` = `estado`.`id_estado`
      INNER JOIN `cidade` ON `estado`.`id_cidade` = `cidade`.`id_cidade`
      INNER JOIN `bairro` ON `endereco`.`id_bairro` = `bairro`.`id_bairro`
      INNER JOIN `telefone` ON `cliente`.`id_telefone` = `telefone`.`id_telefone`
      INNER JOIN `tipo_logradouro` ON `endereco`.`id_logradouro` = `tipo_logradouro`.`id_logradouro`
      INNER JOIN `tipo_telefone` ON `telefone`.`id_tipoTel` = `tipo_telefone`.`id_tipoTel`
      WHERE cpf_cliente = $login_cookie";

    echo "<div class='efetuar-cadastro'>"; //Inicio form
    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        // Apresenta cada linha da tabela
        while ($row = mysqli_fetch_assoc($result)) {
          $dataN = explode('-', $row["dataNasc"]);
          $ano = $dataN[0];
          $mes = $dataN[1];
          $dia = $dataN[2];
          $nova_data = $dia . '/' . $mes . '/' . $ano;
    ?>
          
          <form action="userExcluir_exe.php" method="post" onsubmit="return check(this.form)">

            <input type="hidden" id="Id" name="Id" value="<?php echo $row['cpf_cliente']; ?>">

            <div class="input-wrapper">
              <label for="nomeCliente">Nome</label>
              <input name="nomeCliente" type="text" value="<?php echo $row['nomeCliente']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="sobrenomeCliente">Sobrenome</label>
              <input name="sobrenomeCliente" type="text" value="<?php echo $row['sobrenomeCliente']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="cpf_cliente">CPF</label>
              <input name="cpf_cliente" type="text" value="<?php echo $row['cpf_cliente']; ?>" disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="DataNasc">Data de Nascimento</label>
              <input name="DataNasc" type="date" value="<?php echo $row['dataNasc']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="email">E-mail</label>
              <input type="email" name="email" value="<?php echo $row['email']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="nomePais">País</label>
              <input type="text" name="nomePais" value="<?php echo $row['nomePais']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="tipoTel">Tipo de Telefone</label>
              <input list="tipo-tel" type="text" name="tipoTel" value="<?php echo $row['tipoTel']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="numTel">Telefone</label>
              <input type="tel" name="numTel" maxlength="15" value="<?php echo $row['numTel']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="nomeEstado">Estado</label>
              <input type="text" name="nomeEstado" value="<?php echo $row['nomeEstado']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="nomeCidade">Cidade</label>
              <input type="text" name="nomeCidade" value="<?php echo $row['nomeCidade']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="tipoLogradouro">Tipo Logradouro</label>
              <input type="text" name="tipoLogradouro" value="<?php echo $row['tipoLogradouro']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="nomeRua">Logradouro</label>
              <input type="text" name="nomeRua" value="<?php echo $row['nomeRua']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="numRua">Número</label>
              <input type="number" name="numRua" value="<?php echo $row['numRua']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="nomeBairro">Bairro</label>
              <input type="text" name="nomeBairro" value="<?php echo $row['nomeBairro']; ?>" required disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="senha">Nova Senha</label>
              <input type="password" name="senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}" title="Para excluir, digite sua senha!" required>
            </div>

            <div class="input-wrapper">
              <label for="senha2">Confirme a Nova Senha</label>
              <input type="password" name="senha2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}" title="Para excluir, confirme sua senha!" required>
            </div>

            <input type="button" value="Voltar" class="bt-excluir-voltar" onclick="onOffPageExcluir()">
            <input type="submit" value="Confirmar" class="bt-excluir-confirmar" onclick="onOffUpdate(), window.location.href='index.php'">

          </form>
    <?php
        }
      }
    } else {
      echo "Erro executando DELETE: " . mysqli_error($conn);
    }
    echo "</div>"; //Fim form
    mysqli_close($conn);  //Encerra conexao com o BD

    ?>

  </div>
  <div id="sair-home">
    <a href="./index.php"></a>
  </div>

</div>