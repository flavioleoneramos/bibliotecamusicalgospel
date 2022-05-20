<style>
    div#darkModDiv{
        margin-bottom: 15px;
        margin-left: 35px;
    }

    div#darkModDiv input#darkMod{
        cursor: pointer;
    }

    div#loginCadastro a.link{
        color: white;
    }
</style>
<div id="modo">

</div>
<!--<div id="darkModDiv">
    <input type="button" id="darkMod" value="Modo Escuro" class="botao" onclick="darkMod()">
</div>-->
<div id="loginCadastro">
    <?php
        if(!isset($_SESSION['nome'])){
            echo "<ul>
                <li>
                    <a href='login.php' class='link'>Login</a>
                    <a href='cadastro.php' class='link'>Cadastro</a></br></br>
                    <strong>Bem vindo(a): </strong><em> Visitante</em>
                </li>
            </ul>";
        }else{
            echo "<ul>
            <li>
                <a href='logout.php' class='link'>Logout</a>
                <a href='perfil.php' class='link' id='perfil'>Perfil</a></br></br>
                <strong>Bem vindo(a): </strong><em>".$_SESSION["nome"]."</em>
            </li>
        </ul>";
        }
    ?>
</div>

