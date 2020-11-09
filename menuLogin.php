<!-- Início Login Header -->

<header>
  <nav id="wrapper">
    <ul class="menu">
      <li class="logo">
        <div id="logo-box">
          <a href="./index.html">
            <img src="./src/assets/images/logo.png" alt="Voe+">
          </a>
          <div id="hello-user">
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
            $sql = "SELECT cpf_cliente, nomeCliente, sobrenomeCliente, email, dataNasc, senha FROM cliente WHERE cpf_cliente = $login_cookie";

            //Inicio DIV form
            echo "<div class='efetuar-cadastro'>";
            if ($result = mysqli_query($conn, $sql)) {
              if (mysqli_num_rows($result) > 0) {
                // Apresenta cada linha da tabela
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<span>Olá, <strong>$row[nomeCliente]</strong> <strong>$row[sobrenomeCliente]</strong> </span>";
                }
              }
            } else {
              echo "Erro executando UPDATE: " . mysqli_error($conn);
            }

            mysqli_close($conn); //Encerra conexao com o BD

            ?>

          </div>
        </div>
      </li>
      <li class="logo-centro">
        <img src="./src/assets/images/background-header-frame.svg" alt="Background-Voe+">
      </li>

      <div id="conf">
        <li class="item upper top">
          <a href="#">
            <span class="destiny">
              Destinos
              <img src="./src/assets/images/icons/arrow-down.svg" class="arrow-down" alt="arrow-down">
            </span>
          </a>
        <li class="item lower">
          <ul class="submenu">
            <li class="item down"><a href="#">Pacotes Nacionais</a></li>
            <li class="item down"><a href="#">Pacotes Internacionais</a></li>
            <li class="item down"><a href="#">Resorts</a></li>
            <li class="item down"><a href="#">Passeios</a></li>
            <li class="item down"><a href="#">Hotéis e Pousadas</a></li>
          </ul>
        </li>
        </li>
      </div>

      <li class="item"><a href="#">Institucional</a></li>
      <li class="item"><a href="#">Contato</a></li>
      </li>
      <li class="item button">
        <section id="buttons" class="create-log">
          <label class="sign-in" onclick="onOffUpdate()">Atualizar</label>
        </section>
        <!-- <a href="#">Log In</a> -->
      </li>
      <li class="item button secondary">
        <section id="buttons" class="create-log">
          <label class="logout"><a href="logout.php">Sair</a></label>
        </section>
        <!-- <section id="buttons" class="create-log">
          <label class="sign-up">Sair</label>
        </section> -->
        <!-- <a href="#">Sign Up</a> -->
      </li>
      <li class="toggle"><span class="bars"></span></li>
    </ul>
  </nav>

</header>