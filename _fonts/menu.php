

<style>
    @media screen and (max-width: 800px){
        nav#menu{
            width: 200px;
            position: absolute;
            top: 0;
            right: 0;
            text-align: center;
        }

        nav#menu ul#menuOpacit{
            display: none;
        }

        nav#menu ul li{
            height: 30px;
        }

        nav#menu ul li a{
            height: 100%;
        }

        nav#menu img.iconMenu{
            float: right;
            cursor: pointer;
        }

    }
</style>
<nav id="menu">
        <img src="_imagens/iconMenu.png" class="iconMenu" onclick="mostrarMenu()">
        <ul id="menuOpacit">
            <li class="linkMenu">
                <a href="index.php" class="linkMenu" id="home">Home</a>
            </li>
            <li class="linkMenu">
                <a href="curso.php" class="linkMenu" id="curso">Cursos</a>
            </li>
            <li class="linkMenu">
                <a href="tvonline.php" class="linkMenu" id="tv">Tv Online</a>
            </li>
            <li class="linkMenu">
                <a href="faucets.php" class="linkMenu" id="faucet">Faucets</a>
            </li>
            <li class="linkMenu">
                <a href="#" class="linkMenu">Loja</a>
            </li>
        </ul>
</nav>

<script>
    function mostrarMenu(){
        var menu = document.getElementById("menuOpacit")
        menu.style.display = "block"
    }
</script>

