<style>
    div#login{
        width: 400px;
        border: 3px solid #e30224;
        border-radius: 10px;
        margin: 10px auto 10px auto;
        text-align: center;
    }

    div#NaoTemConta{
        width: 100%;
        margin: 20px auto 20px auto;
        text-align: center;
        font-weight: bold;
    }

    a.linkR{
        color: #8a0015;
        text-decoration: none;
    }

    a.linkR:hover{
        color: #e30224;
    }
</style>
<div id="login">
    <h1>Login</h1></br>
    <form method="post" action="_contr/verLogin.php" enctype="multipart/form-data">
        <label for="idEmail">Email: </label><input type="email" name="email" id="idEmail" required="required"></br></br>
        <label for="idSenha">Senha: </label><input type="password" name="senha" id="idSenha" required="required"></br></br>
        <input type="submit" value="Login" class="botao"></br>
    </form>
    <div id="NaoTemConta">
        <em>Esqueceu a senha?&nbsp;</em><a href="recupSenha.php" class="linkR">Recuperar Senha</a></br></br></br>
        <em>Ainda não tem uma conta?&nbsp;</em><a href="cadastro.php" class="linkR">Cadastre-se</a>
    </div>
</div>