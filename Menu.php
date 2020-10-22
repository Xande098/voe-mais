<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Voe + Passagens Aéreas - Home</title>

  <link rel="stylesheet" href="./src/assets/styles/global.css">
  <link rel="stylesheet" href="./styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="./src/assets/images/logo.png" type="image/png" sizes="60x60">
</head>

<body>
  <header>
    <nav id="wrapper">
      <ul class="menu">
        <li class="logo">
          <div id="logo-box">
            <a href="./index.html">
              <img src="./src/assets/images/logo.png" alt="Voe+">
            </a>
          </div>
        </li>
        <li class="logo-centro">
          <img src="./src/assets/images/background-header-frame.svg" alt="Background-Voe+">
        </li>
        <!-- <li class="item header-top"><a href="./index.html">Home</a></li> -->
      
        <li class="item upper top">
          <a href="#">
            <span class="destiny">
              Destinos
              <img src="./src/assets/images/icons/arrow-down.svg" class="arrow-down" alt="arrow-down">
            </span>
          </a>
          <li class="item lower">
            <ul class="submenu">
              <li class="item down"><a href="#">Ásia</a></li>
              <li class="item down"><a href="#">Américas</a></li>
              <li class="item down"><a href="#">Brasil</a></li>
              <li class="item down"><a href="#">Europa</a></li>
            </ul>
          </li>
        </li>

        <li class="item"><a href="#">Institucional</a></li>
        <li class="item"><a href="#">Contato</a></li>
        </li>
        <li class="item button">
          <section id="buttons" class="create-log">
            <label class="sign-in" onclick="onOff()">Log In</label>
          </section>
          <!-- <a href="#">Log In</a> -->
        </li>
        <li class="item button secondary">
          <section id="buttons" class="create-log">
            <label class="sign-up" onclick="onOff()">Sign Up</label>
          </section>
          <!-- <a href="#">Sign Up</a> -->
        </li>
        <li class="toggle"><span class="bars"></span></li>
      </ul>
    </nav>

  </header>

</html>