<style>
    div#login{
        width: 500px;
        border: 3px solid #e30224;
        border-radius: 10px;
        margin: auto;
        text-align: center;
    }

    div#NaoTemConta{
        width: 100%;
        margin: 20px auto 20px auto;
        text-align: center;
        color: #e30224;
        font-weight: bold;
    }
</style>
<div id="login">
    <h1>Login</h1>
    <form method="post" action="_contr/verLogin.php">
        <label for="idEmail">Email: </label><input type="email" name="email" id="idEmail" required="required"></br></br>
        <label for="idSenha">Senha: </label><input type="password" name="senha" id="idSenha" required="required"></br></br>
        <input type="submit" value="Login" class="botao"></br>
    </form>
    <div id="NaoTemConta">
        <em>Esqueceu a senha?&nbsp;</em><a href="recupSenha.php" class="botao">Recuperar Senha</a></br></br></br>
        <em>Ainda não tem uma conta? <a href="cadastro.php" class="botao">Cadastre-se</a></em>
    </div>
</div>