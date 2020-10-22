<!DOCTYPE html>
<html lang="pt-br">

<!--Início Modal-->
<!-- Modal -->
<div id="modal" class="hide">
  <div class="content">
    <h1>Tela de Cadastro</h1>

    <form action="/" method="POST" onsubmit="return checkFields(event)">

      <div class="input-wrapper">
        <label for="title">Nome</label>
        <input type="text" name="title">
      </div>

      <div class="input-wrapper">
        <label for="title">Sobrenome</label>
        <input type="text" name="title">
      </div>

      <div class="input-wrapper">
        <label for="title">CPF</label>
        <input type="text" name="title">
      </div>

      <div class="CPF">
        <label for="title">Data de Nascimento</label>
        <input type="text" name="title">
      </div>

      <div class="input-wrapper">
        <label for="category">Categoria</label>
        <input type="text" name="category">
      </div>

      <div class="input-wrapper">
        <label for="image">Link da Imagem</label>
        <input type="url" name="image">
      </div>

      <div class="input-wrapper">
        <label for="description">Digite uma descrição para essa ideia</label>
        <textarea name="description" cols="30" rows="10"></textarea>
      </div>

      <div class="input-wrapper">
        <label for="link">Link da ideia</label>
        <input type="url" name="link">
      </div>

      <a href="#" onclick="onOff()">Voltar</a>
      <button>Salvar</button>


    </form>

  </div>
</div>
<!-- Fim Modal -->

</html>