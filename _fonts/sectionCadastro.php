<style>
    div#cadastro{
        width: 500px;
        border: 3px solid #e30224;
        border-radius: 10px;
        margin: auto;
        text-align: center;
    }

    div#temConta{
        width: 100%;
        margin: 20px auto 20px auto;
        text-align: center;
        color: #e30224;
        font-weight: bold;
    }
</style>
<div id="cadastro">
    <h1>Cadastro</h1>
    <form method="post" action="_contr/verCadastro.php">
        <label for="idNome">Nome: </label><input type="txt" name="nome" id="idNome"></br></br>
        <label for="idEmail">Email: </label><input type="email" name="email" id="idEmail"></br></br>
        <label for="idSenha">Senha: </label><input type="password" name="senha" id="idSenha"></br></br>
        <input type="submit" value="Cadastrar" class="botao"></br>
    </form>
    <div id="temConta">
        <em>Já possui uma conta? <a href="login.php" class="botao">Login</a></em>
    </div>
</div>