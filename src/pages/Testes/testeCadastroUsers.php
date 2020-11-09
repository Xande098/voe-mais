<div class="w3-code cssHigh notranslate">

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
  $sqlT = "SELECT id_tipoTel, tipoTel FROM tipo_telefone";
  $sqlL = "SELECT id_logradouro, tipoLogradouro FROM tipo_logradouro";

  $optionsTipoTel = array();
  $optionsTipoLogra = array();

  echo "<div class='efetuar-cadastro'>";
  if ($result = mysqli_query($conn, $sqlT)) {
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($optionsTipoTel, "\t\t\t<option value='" . $row["id_tipoTel"] . "'>" . $row["tipoTel"] . "</option>\n");
    }
  }
  if ($result = mysqli_query($conn, $sqlL)) {
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($optionsTipoLogra, "\t\t\t<option value='" . $row["id_logradouro"] . "'>" . $row["tipoLogradouro"] . "</option>\n");
    }
  }
  if (sizeof($optionsTipoTel) == 0) {
    echo "<p><b>Nao</b> existem Tipos de Telefone cadastrados para serem registrados!</p>";
  }
  if (sizeof($optionsTipoLogra) == 0) {
    echo "<p><b>Nao</b> existem Tipos de Logradouros cadastrados para serem registrados!</p>";
  }
  echo "</div>";
  mysqli_close($conn);

  if (!(sizeof($optionsTipoTel) == 0 || sizeof($optionsTipoLogra) == 0)) {
  ?>
    <div class="efetuar-cadastro">
      <form action="cadastroUsers_exe.php" method="post" onsubmit="return check(this.form)">

        <input type="hidden" id="acaoForm" name="acaoForm" value="Contratar">

        <div class="input-wrapper">
          <label for="tipoLogradouro">Tipo Logradouro</label>
          <select name="tipoLogradouro" id="tipo-Logradouro" required>
            <option value=""></option>
            <?php
            foreach ($optionsTipoLogra as $key => $value) {
              echo $value;
            }
            ?>
          </select>
        </div>

        <div class="input-wrapper">
          <label for="tipoTel">Tipo de Telefone</label>
          <select name="tipoTel" id="tipo-tel" required>
            <option value=""></option>
            <?php
            foreach ($optionsTipoTel as $key => $value) {
              echo $value;
            }
            ?>
          </select>
        </div>

        <input type="button" value="Voltar" class="bt-signup-voltar" onclick="onOffSignUp()">
        <input type="submit" value="Salvar" class="bt-signup-salvar" onclick="onOffSignUp()">

      </form>
    </div>
  <?php
  }
  ?>
</div>


<!-- Começa aqui -->

<!--Início Modal-->
<!-- Início Sign Up -->
<div id="modal-signup" class="hide">
  <div class="content-signup">
    <h1>Tela de Cadastro</h1>


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
    $sqlT = "SELECT id_tipoTel, tipoTel FROM tipo_telefone";
    $sqlL = "SELECT id_logradouro, tipoLogradouro FROM tipo_logradouro";

    $optionsTipoTel = array();
    $optionsTipoLogra = array();

    echo "<div class='efetuar-cadastro'>";
    if ($result = mysqli_query($conn, $sqlT)) {
      while ($row = mysqli_fetch_assoc($result)) {
        array_push($optionsTipoTel, "\t\t\t<option value='" . $row["id_tipoTel"] . "'>" . $row["tipoTel"] . "</option>\n");
      }
    }
    if ($result = mysqli_query($conn, $sqlL)) {
      while ($row = mysqli_fetch_assoc($result)) {
        array_push($optionsTipoLogra, "\t\t\t<option value='" . $row["id_logradouro"] . "'>" . $row["tipoLogradouro"] . "</option>\n");
      }
    }
    if (sizeof($optionsTipoTel) == 0) {
      echo "<p><b>Nao</b> existem Tipos de Telefone cadastrados para serem registrados!</p>";
    }
    if (sizeof($optionsTipoLogra) == 0) {
      echo "<p><b>Nao</b> existem Tipos de Logradouros cadastrados para serem registrados!</p>";
    }
    echo "</div>";
    mysqli_close($conn);

    if (!(sizeof($optionsTipoTel) == 0 || sizeof($optionsTipoLogra) == 0)) {
    ?>

      <div class="efetuar-cadastro">
        <form action="cadastroUsers_exe.php" method="post" onsubmit="return check(this.form)">

          <input type="hidden" id="acaoForm" name="acaoForm" value="Contratar">

          <div class="input-wrapper">
            <label for="nomeCliente">Nome</label>
            <input name="nomeCliente" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{3,15}$" title="Nome entre 3 e 15 letras." placeholder="Joe" required>
          </div>

          <div class="input-wrapper">
            <label for="sobrenomeCliente">Sobrenome</label>
            <input name="sobrenomeCliente" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{3,15}$" title="Sobrenome entre 3 e 15 letras." placeholder="Travel" required>
          </div>

          <div class="input-wrapper">
            <label for="cpf_cliente">CPF</label>
            <input name="cpf_cliente" type="text" pattern="^(\d{3}\.\d{3}\.\d{3}-\d{2})|(\d{11})$" placeholder="888.888.888-88" title="Digite o cpf corretamente." required>
          </div>

          <div class="input-wrapper">
            <label for="DataNasc">Data de Nascimento</label>
            <input name="DataNasc" type="date" pattern="((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/((19|20)[0-9][0-9])" title="Formato: dd/mm/aaaa." required>
          </div>

          <div class="input-wrapper">
            <label for="email">E-mail</label>
            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Digite um e-mail válido." placeholder="joe@example.com" required>
          </div>

          <div class="input-wrapper">
            <label for="nomePais">País</label>
            <input type="text" name="nomePais" pattern="[a-zA-Z\u00C0-\u00FF ]{2,15}$" title="Nome do País de 2 à 15 letras." placeholder="Brasil" required>
          </div>

          <div class="input-wrapper">
            <label for="tipoTel">Tipo de Telefone</label>
            <select name="tipoTel" id="tipo-tel" required>
              <option value=""></option>
              <?php
              foreach ($optionsTipoTel as $key => $value) {
                echo $value;
              }
              ?>
            </select>
          </div>

          <div class="input-wrapper">
            <label for="numTel">Telefone</label>
            <input type="tel" name="numTel" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(41) 99999-9999" placeholder="(41) 99999-9999" required>
          </div>

          <div class="input-wrapper">
            <label for="nomeEstado">Estado</label>
            <input type="text" name="nomeEstado" pattern="[a-zA-Z\u00C0-\u00FF ]{2,15}$" title="Nome do Estado de 2 à 15 letras." placeholder="Paraná" required>
          </div>

          <div class="input-wrapper">
            <label for="nomeCidade">Cidade</label>
            <input type="text" name="nomeCidade" pattern="[a-zA-Z\u00C0-\u00FF ]{2,15}$" title="Nome do Cidade de 2 à 15 letras." placeholder="Curitiba" required>
          </div>

          <div class="input-wrapper">
            <label for="tipoLogradouro">Tipo Logradouro</label>
            <select name="tipoLogradouro" id="tipo-Logradouro" required>
              <option value=""></option>
              <?php
              foreach ($optionsTipoLogra as $key => $value) {
                echo $value;
              }
              ?>
            </select>
          </div>

          <div class="input-wrapper">
            <label for="nomeRua">Logradouro</label>
            <input type="text" name="nomeRua" pattern="[a-zA-Z\u00C0-\u00FF ]{5,30}$" title="Digite o endereço de 5 à 30 letras." placeholder="Eleutério de Souza Padilha" required>
          </div>

          <div class="input-wrapper">
            <label for="numRua">Número</label>
            <input type="number" name="numRua" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="7" title="Digite o número do seu endereço." placeholder="1004" required>
          </div>

          <div class="input-wrapper">
            <label for="nomeBairro">Bairro</label>
            <input type="text" name="nomeBairro" pattern="[a-zA-Z\u00C0-\u00FF ]{3,30}$" title="Digite o Bairro de 3 à 30 letras." placeholder="Centro" required>
          </div>

          <div class="input-wrapper">
            <label for="senha">Senha</label>
            <input type="password" name="senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}" title="Deve conter ao menos um número, uma letra maiúscula e minúscula, um caracter especial, com 6 a 8 caracteres" required>
          </div>

          <div class="input-wrapper">
            <label for="senha2">Confirme a Senha</label>
            <input type="password" name="senha2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}" title="Deve conter ao menos um número, uma letra maiúscula e minúscula, um caracter especial, com 6 a 8 caracteres" required>
          </div>

          <!-- <a href="." onclick="onOffSignUp()">Voltar</a>
        <button>Salvar</button> -->
          <!-- <input type="button" value="Voltar" class="bt-signup-voltar" onclick="window.location.href='.'"> -->

          <input type="button" value="Voltar" class="bt-signup-voltar" onclick="onOffSignUp()">
          <input type="submit" value="Salvar" class="bt-signup-salvar">


        </form>
      </div>

    <?php
    }
    ?>

  </div>
  <div id="sair-home">
    <a href="./index.php"></a>
  </div>
</div>
<!-- Fim Modal Sign Up -->