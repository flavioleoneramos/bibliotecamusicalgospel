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
<div id="cadastro">
    <h1>Cadastro</h1>
    <form method="post" action="_contr/verCadastro.php"  enctype="multipart/form-data">
        <label for="idNome">Nome: </label><input type="txt" name="nome" id="idNome" required="required"></br></br>
        <label for="idEmail">Email: </label><input type="email" name="email" id="idEmail"  required="required"></br></br>
        <label for="idSenha">Senha: </label><input type="password" name="senha" id="idSenha"  required="required"></br></br>
        <label for="idSenhaR">Confirme a senha: </label><input type="password" name="senhaR" id="idSenhaR"  required="required"></br></br>
        <input type="submit" value="Cadastrar" class="botao" onclick="verificaSenha()"></br>
    </form>
    <div id="temConta">
        <em>Já possui uma conta? </em><a href="login.php" class="linkR">Faça login</a>
    </div>

    <script>
        function verificaSenha(){

            let senha = document.getElementById("idSenha")
            let senhaR = document.getElementById("idSenhaR")

            let se = senha.value
            let seR = senhaR.value

            if(se == "" && seR == ""){
                alert("Informe os dados abaixo");
            }else if(se != seR){
                alert("Senha não confere")
                
            }
            
            /*if(se === seR && se != "" && seR != ""){
                //alert("Senhas conferem. Direcionando para perfil!")ok
            }else{
                
                alert("Insira os dados corretamente.")
                document.location.reload(false)
            }*/
        }
    </script>
</div>