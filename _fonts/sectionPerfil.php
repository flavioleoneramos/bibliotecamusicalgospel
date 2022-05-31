<?php

    $nomeUser = htmlspecialchars($_SESSION["idNome"]);
    $emailUser = htmlspecialchars($_SESSION["idEmail"]);
    $fotoUser = htmlspecialchars($_SESSION["idFoto"]);

?>

<style>
    #dadosPerfil{
        line-height: 90px;
    }

    ul.userPerfil{
        list-style: none;
    }

    ul.userPerfil li{
        margin: 15px;
    }

    #imagemPerfil img#fotoPerfil:hover{
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.5);
        transition: 1s;
    }

    #imagemPerfil figure{
        position: relative;
    }

    #imagemPerfil figure figcaption{
        opacity: 0;
        position: absolute;
        padding-top: 20px;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    #imagemPerfil figure:hover figcaption{
        opacity: 1;
    }

    a.linkR{
        color: #8a0015;
        text-decoration: none;
    }

    a.linkR:hover{
        color: #e30224;
    }

    @media screen and (min-width: 800px){
        ul.userPerfil li{
            display: inline-block;
        }
    }

    @media screen and (max-width: 800px){
        ul.userPerfil li{
            display: list-item;
        }
    }
</style>

<section id="containerPerfil">
<ul class="userPerfil">
    <li>
        <div id="dadosPerfil">
            <h3>Seus dados</h3>
            <p>Nome: <em><?php echo $nomeUser;?></em></p>
            <p>Email: <em><?php echo $emailUser;?></em></p>
        </div>
    </li>
    <li>
        <div id="imagemPerfil">
            <figure>
                <img src="<?php echo $fotoUser;?>" id="fotoPerfil" alt="Imagem de perfil">
                <figcaption>
                    <a href="updateDados.php" class="botao">Enviar Foto</a>
                </figcaption>
            </figure>
            
        </div>
    </li>
</ul>

<ul class="userPerfil">
<li>
        <div id="msgDia">
            <h1>Mensagem do dia</h1>
        </div>
    </li>
    <li>
        <div id="noticiasPerfil">
            <h1>Noticias Perfil</h1>
        </div>
    </li>

    <a href="updateDados.php" class="botao">Alterar seus dados</a>
</ul>

<?php 

    require "_fonts/section2Footer.php";

?>

</section>

