<!DOCTYPE html>
<html lang="pt-br">

  <!-- Inclui MENU.PHP  -->
  <?php require 'menu.php'; ?>

  <div class="container">
    <h2>Promoções</h2>
    <section id="last-ideias">
      <div class="idea">
        <img src="https://image.flaticon.com/icons/svg/2729/2729007.svg" alt="Imagem de Curso de Programação">

        <div class="contente">
          <h3>Cursos de Programação</h3>
          <p>Estudo</p>
          <div class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, voluptatem optio. Maiores,
            mollitia corrupti vero optio quibusdam id non enim. Reiciendis labore aliquam saepe odit.
            Ratione tempora vel aliquam molestiae?
          </div>
          <a href="#">Ir para a Ideia</a>
        </div>
      </div>

      <div class="idea">
        <img src="https://image.flaticon.com/icons/svg/2729/2729005.svg" alt="Imagem de Exercícios">

        <div class="contente">
          <h3>Exercícios</h3>
          <p>Saúde</p>
          <div class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, voluptatem optio. Maiores,
            mollitia corrupti vero optio quibusdam id non enim. Reiciendis labore aliquam saepe odit.
            Ratione tempora vel aliquam molestiae?
          </div>
          <a href="#">Ir para a Ideia</a>
        </div>
      </div>

      <div class="idea">
        <img src="https://image.flaticon.com/icons/svg/2729/2729027.svg" alt="Imagem de Meditação">

        <div class="contente">
          <h3>Meditação</h3>
          <p>Mentalidade</p>
          <div class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, voluptatem optio. Maiores,
            mollitia corrupti vero optio quibusdam id non enim. Reiciendis labore aliquam saepe odit.
            Ratione tempora vel aliquam molestiae?
          </div>
          <a href="#">Ir para a Ideia</a>
        </div>
      </div>

    </section>

    <!-- Inclui CADASTROUSERS.PHP  -->
		<?php require 'cadastroUsers.php';?>

    <!-- Inclui RODAPE.PHP  -->
		<?php require 'rodape.php';?>
    
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="./index.js"></script>

</body>

</html>