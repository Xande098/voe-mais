<!-- Início Sign In -->
<div id="modal-signin" class="hide">
  <div class="content-signin">
    <h1>Tela de Login</h1>

    <form action="/" method="POST" onsubmit="return checkFields(event)">

      <div class="input-wrapper">
        <label for="title">Login</label>
        <input type="text" name="title">
      </div>

      <div class="input-wrapper">
        <label for="title">Senha</label>
        <input type="password" name="title">
      </div>

      <a href="#" onclick="onOffSignIn()">Voltar</a>
      <button>Salvar</button>

      <div id="forSign-up" class="item button secondary mark">
        <span>Ainda não possui cadastro?</span>
        <span>Cadastre-se:</span>
        <section id="buttons" class="create-log forSign-up">
          <label class="sign-up" onclick="onOffSignIn(),
                onOffSignUp()">
            Sign Up
          </label>
        </section>
      </div>

    </form>

  </div>
</div>
<!-- Fim Modal Sign In -->
<!-- Fim do Modal -->