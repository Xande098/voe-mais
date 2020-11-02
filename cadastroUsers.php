<!--Início Modal-->
<!-- Início Sign Up -->
<div id="modal-signup" class="hide">
  <div class="content-signup">
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

      <div class="input-wrapper">
        <label for="title">Data de Nascimento</label>
        <input type="date" name="title">
      </div>

      <div class="input-wrapper">
        <label for="title">E-mail</label>
        <input type="email" name="title">
      </div>

      <div class="input-wrapper">
        <label for="category">País</label>
        <input type="text" name="category">
      </div>

      <div class="input-wrapper">
        <label for="category">Tipo de Telefone</label>
        <input type="text" name="category">
      </div>

      <div class="input-wrapper">
        <label for="title">Telefone</label>
        <input type="text" name="title">
      </div>

      <div class="input-wrapper">
        <label for="category">Estado</label>
        <input type="text" name="category">
      </div>

      <div class="input-wrapper">
        <label for="category">Cidade</label>
        <input type="text" name="category">
      </div>

      <div class="input-wrapper">
        <label for="category">Tipo Logradouro</label>
        <input type="text" name="category">
      </div>

      <div class="input-wrapper">
        <label for="title">Logradouro</label>
        <input type="text" name="title">
      </div>

      <div class="input-wrapper">
        <label for="title">Número</label>
        <input type="text" name="title">
      </div>

      <div class="input-wrapper">
        <label for="title">Bairro</label>
        <input type="text" name="title">
      </div>

      <div class="input-wrapper">
        <label for="text">Senha</label>
        <input type="password" name="text">
      </div>

      <div class="input-wrapper">
        <label for="text">Confirme a Senha</label>
        <input type="password" name="text">
      </div>

      <a href="#" onclick="onOffSignUp()">Voltar</a>
      <button>Salvar</button>


    </form>

  </div>
</div>
<!-- Fim Modal Sign Up -->