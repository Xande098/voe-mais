<!-- Início Sign In -->
<div id="modal-signin" class="hide">
  <div class="content-signin">
    <h1>Tela de Login</h1>

    <div class="efetuar-login">
      <!-- <form action="/" method="POST" onsubmit="return checkFields(event)"> -->
      <form action="loginUsers.exe.php" method="post" onsubmit="return check(this.form)">

        <input type="hidden" id="acaoLogin" name="acaoLogin" value="Logar">

        <div class="input-wrapper">
          <label for="nomeCliente"></label>
          <input
            name="nomeCliente"
            type="hidden"
            pattern="[a-zA-Z\u00C0-\u00FF ]{3,15}$"
            title="Nome entre 3 e 15 letras."
            placeholder="Joe"
            required
          >
        </div>

        <div class="input-wrapper">
          <label for="title">Login</label>
          <input
            name="cpf_cliente"
            id="cpf_cliente"
            type="text"
            pattern="^(\d{3}\.\d{3}\.\d{3}-\d{2})|(\d{11})$"
            placeholder="888.888.888-88"
            title="Seu login é o seu CPF."
            required
          >
        </div>

        <div class="input-wrapper">
          <label for="title">Senha</label>
          <input
            type="password"
            name="senha"
            id="senha"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}"
            title="Deve conter ao menos um número, uma letra maiúscula e minúscula, um caracter especial, com 6 a 8 caracteres"
            required
          >
        </div>

        <!-- <a href="#" onclick="onOffSignIn()">Voltar</a>
        <button>Salvar</button> -->
        <input type="button" value="Voltar" class="bt-signup-voltar" onclick="onOffSignIn()">
        <input type="submit" value="Entrar" class="bt-signup-salvar">

        <div id="forSign-up" class="item button secondary mark">
          <span>Ainda não possui cadastro?</span>
          <span>Cadastre-se:</span>
          <section id="buttons" class="create-log forSign-up">
            <label
              class="sign-up"
              onclick="onOffSignIn(), onOffSignUp()"
            >
              Sign Up
            </label>
          </section>
        </div>

      </form>
    </div>

  </div>
</div>
<!-- Fim Modal Sign In -->
<!-- Fim do Modal -->