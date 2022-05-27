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

    div#loginCadastro header{
        margin-bottom: 25px;
    }

    div#loginCadastro header a.linkR{
        text-decoration: none;
        color: #8a0015;
    }

    div#loginCadastro header a.linkR:hover{
        text-decoration: underline;
        color: #e30224;
    }

    @media screen and (max-width: 800px){
        div#loginCadastro{
            margin-top: 30px;
            margin-left: -50px;
        }

        div#loginCadastro header a.linkR{
            margin-left: 80px;
        }
    }
</style>
<div id="modo">

</div>
<!--<div id="darkModDiv">
    <input type="button" id="darkMod" value="Modo Escuro" class="botao" onclick="darkMod()">
</div>-->
<div id="loginCadastro">
    <header>
        <a href="contato.php" class="linkR"><img src="_imagens/contato.png" alt="Contato"> Contato</a>
    </header>
    <section>
    <?php
        if(!isset($_SESSION['idNome'])){
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
                <strong>Bem vindo(a): </strong><em>".$_SESSION["idNome"]."</em>
            </li>
        </ul>";
        }
    ?>
    </section>
</div>

