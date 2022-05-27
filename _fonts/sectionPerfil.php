<?php

    $nomeUser = htmlspecialchars($_SESSION["idNome"]);
    $emailUser = htmlspecialchars($_SESSION["idEmail"]);
    $fotoUser = htmlspecialchars($_SESSION["idFoto"]);

?>

<style>

    ul.userPerfil{
        list-style: none;
    }

    ul.userPerfil li{
        margin: 15px;
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
            <p>Nome: <em><?php echo $fotoUser;?></em></p>
            <p>Email: <em><?php echo $emailUser;?></em></p>
        </div>
    </li>
    <li>
        <div id="imagemPerfil">
            <img src="<?php echo $fotoUser;?>" alt="Imagem de perfil">
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

