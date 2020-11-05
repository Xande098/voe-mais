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
  <!-- Início do Header -->
  <!-- Inclui MENU.PHP  -->
  <?php require 'menu.php'; ?>
  <!-- Fim do Header -->

  <?php
  $login_cookie = $_COOKIE['cpf_cliente'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>

  <div class="container">

    <!-- Carrossel com destaques dos pacotes de viagens -->
    <!-- Início -->
    <!-- Inclui CARROSEL.PHP  -->
    <?php require 'carrosel.php'; ?>
    <!-- Fim -->

    <!-- Filtro que separa os pacotes de viagens em promoção dos de preço normal -->
    <!-- Início -->
    <!-- Inclui ChoicePackageFilter.PHP -->
    <?php require 'ChoicePackageFilter.php'; ?>
    <!-- Fim -->

    <!--Início Modal-->
    <!-- Início Sign Up -->
    <!-- Inclui cadastroUsers.PHP -->
    <?php require 'cadastroUsers.php'; ?>
    <!-- Fim Modal Sign Up -->

    <!-- Início Sign In -->
    <!-- Inclui loginUser.PHP -->
    <?php require 'loginUsers.php'; ?>
    <!-- Fim Modal Sign In -->
    <!-- Fim do Modal -->

    <!-- Início Page Promoções -->
    <!-- Inclui pagePromotionPackages.PHP -->
    <?php require 'pagePromotionPackages.php'; ?>
    <!-- Fim Page Promoções -->

    <!-- Início Page Pacotes a Venda -->
    <!-- Inclui pagePackagesForSale.PHP -->
    <?php require 'pagePackagesForSale.php'; ?>
    <!-- Fim Page Pacotes a Venda -->

    <!-- Início Todos os Pacotes Juntos -->
    <!-- Inclui pageAllTravelPackages.PHP -->
    <?php require 'pageAllTravelPackages.php'; ?>
    <!-- Fim Todos os Pacotes Juntos -->

  </div>

  <!-- Início Footer -->
  <!-- Inclui RODAPE.PHP  -->
  <?php require 'rodape.php';?>
  <!-- Fim Footer -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="./index.js"></script>

</body>

</html>