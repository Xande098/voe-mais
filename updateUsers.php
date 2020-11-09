<!--Início Modal-->
<!-- Início Sign Up -->
<div id="modal-update" class="hide">
  <div class="content-update">
    <h1>Tela de Atualização de Perfil</h1>


    <!-- Acesso ao BD-->
    <?php

    $servername = "localhost:3306";
    $username = "userVoe";
    $password = "1234";
    $database = "voemais";
    /* $id = $_GET['id']; */

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
    $sql = "SELECT cpf_cliente, nomeCliente, sobrenomeCliente, email, dataNasc, senha FROM cliente WHERE cpf_cliente = $login_cookie";

    //Inicio DIV form
    echo "<div class='efetuar-cadastro'>";
    if ($result = mysqli_query($conn, $sql)) {
      if (mysqli_num_rows($result) > 0) {
        // Apresenta cada linha da tabela
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

          <h2>Altere os dados da Disciplina Cód. = <?php echo $row['nomeCliente']; ?></h2>
          <!-- <div class="efetuar-cadastro"> -->

          <form action="updateUsers_exe.php" method="post" onsubmit="return check(this.form)">

            <input type="hidden" id="Id" name="Id" value="<?php echo $row['cpf_cliente']; ?>">

            <div class="input-wrapper">
              <label for="nomeCliente">Nome</label>
              <input name="nomeCliente" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{3,15}$" title="Nome entre 3 e 15 letras." value="<?php echo $row['nomeCliente']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="sobrenomeCliente">Sobrenome</label>
              <input name="sobrenomeCliente" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{3,15}$" title="Sobrenome entre 3 e 15 letras." value="<?php echo $row['sobrenomeCliente']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="cpf_cliente">CPF</label>
              <input name="cpf_cliente" type="text" value="<?php echo $row['cpf_cliente']; ?>" disabled="disabled">
            </div>

            <div class="input-wrapper">
              <label for="DataNasc">Data de Nascimento</label>
              <input name="DataNasc" type="date" pattern="((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/((19|20)[0-9][0-9])" title="Formato: dd/mm/aaaa." value="<?php echo $row['dataNasc']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="email">E-mail</label>
              <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Digite um e-mail válido." value="<?php echo $row['email']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="nomePais">País</label>
              <input type="text" name="nomePais" pattern="[a-zA-Z\u00C0-\u00FF ]{2,15}$" title="Nome do País de 2 à 15 letras." value="<?php echo $row['']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="tipoTel">Tipo de Telefone</label>
              <input list="tipo-tel" type="text" name="tipoTel" title="Escolha uma das opções disponíveis." value="<?php echo $row['']; ?>" required>
              <datalist id="tipo-tel">
                <option value="Celular">
                <option value="Trabalho">
                <option value="Casa">
                <option value="Recado">
              </datalist>
            </div>

            <div class="input-wrapper">
              <label for="numTel">Telefone</label>
              <input type="tel" name="numTel" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(41) 99999-9999" value="<?php echo $row['']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="nomeEstado">Estado</label>
              <input type="text" name="nomeEstado" pattern="[a-zA-Z\u00C0-\u00FF ]{2,15}$" title="Nome do Estado de 2 à 15 letras." value="<?php echo $row['']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="nomeCidade">Cidade</label>
              <input type="text" name="nomeCidade" pattern="[a-zA-Z\u00C0-\u00FF ]{2,15}$" title="Nome do Cidade de 2 à 15 letras." value="<?php echo $row['']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="tipoLogradouro">Tipo Logradouro</label>
              <input type="text" name="tipoLogradouro" list="tipo-Logradouro" title="Escolha uma das opções disponíveis." value="<?php echo $row['']; ?>" required>
              <datalist id="tipo-Logradouro">
                <option value="Rua">
                <option value="Avenida">
              </datalist>
            </div>

            <div class="input-wrapper">
              <label for="nomeRua">Logradouro</label>
              <input type="text" name="nomeRua" pattern="[a-zA-Z\u00C0-\u00FF ]{5,30}$" title="Digite o endereço de 5 à 30 letras." value="<?php echo $row['']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="numRua">Número</label>
              <input type="number" name="numRua" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="7" title="Digite o número do seu endereço." value="<?php echo $row['']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="nomeBairro">Bairro</label>
              <input type="text" name="nomeBairro" pattern="[a-zA-Z\u00C0-\u00FF ]{3,30}$" title="Digite o Bairro de 3 à 30 letras." value="<?php echo $row['']; ?>" required>
            </div>

            <div class="input-wrapper">
              <label for="senha">Nova Senha</label>
              <input type="password" name="senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}" title="Deve conter ao menos um número, uma letra maiúscula e minúscula, um caracter especial, com 6 a 8 caracteres" required>
            </div>

            <div class="input-wrapper">
              <label for="senha2">Confirme a Nova Senha</label>
              <input type="password" name="senha2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}" title="Deve conter ao menos um número, uma letra maiúscula e minúscula, um caracter especial, com 6 a 8 caracteres" required>
            </div>

            <input type="button" value="Voltar" class="bt-update-voltar" onclick="onOffUpdate()">
            <input type="submit" value="Salvar" class="bt-update-salvar" onclick="onOffUpdate()">

            <input type="submit" value="Excluir Conta" class="bt-excluir-conta">


          </form>
    <?php
        }
      }
    } else {
      echo "Erro executando UPDATE: " . mysqli_error($conn);
    }
    echo "</div>"; //Fim DIV form
    mysqli_close($conn); //Encerra conexao com o BD

    ?>

  </div>
  <div id="sair-home">
    <a href="./index.php"></a>
  </div>
</div>
<!-- Fim Modal Sign Up -->