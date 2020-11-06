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
            $login_cookie = $_COOKIE['login'];
            echo "<span>Bem-Vindo, <strong>$login_cookie</strong></span>"
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