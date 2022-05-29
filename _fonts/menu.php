

<style>
nav#menu ul#menuOpacit li.linkMenu{
    position: relative;
}

nav#menu img#iconMenuOpen{
    transition: 1s;
}

nav#menu img#iconMenuClose{
    margin-left: 25px;
    margin-right: 160px;
    transition: 1s;
}

nav#menu ul#menuOpacit li.linkMenu span#lojaBreve{
    position: absolute;
    top: -10px;
    right: -5px;
    padding: 5px;
    border-radius: 5px;
    color: white;
    background-color: red;
}

    @media screen and (min-width: 800px){

        
    nav#menu img.iconMenu{
            display: none;
        }

        nav#menu ul#menuOpacit li.linkMenu img.imgMenu{
            background-color: white;
            margin-right: 5px;
            padding: 5px;
            border-radius: 5px;
        }
    }
    @media screen and (max-width: 800px){

        nav#menu ul#menuOpacit li.linkMenu span#lojaBreve{
            top: -10px;
            left: -5px;
            width: 70px;
        }

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
            margin-bottom: 1px;
        }

        nav#menu ul li a{
            height: 100%;
            width: 100%;
        }

        nav#menu img.iconMenu{
            float: right;
            cursor: pointer;
            background-color: white;
            border-radius: 5px;
            padding: 3px;
            box-shadow: 2px 2px 2px white;
        }

        nav#menu ul#menuOpacit li.linkMenu img.imgMenu{
            background-color: white;
            margin-right: 5px;
            padding: 5px;
            border-radius: 5px;
        }

    }
</style>
<nav id="menu">
    <div id="iconMenuResponsivo">
        <!--<img src="_imagens/iconMenuClose.png" class="iconmenu" id="iconMenuClose" onclick="fecharMenu()">-->
        <img src="_imagens/iconMenuOpen.png" class="iconMenu" id="iconMenuOpen" onclick="mostrarMenu()">
    </div>
        
        <ul id="menuOpacit">
            <li class="linkMenu">
                <a href="index.php" class="linkMenu" id="home"><img src="_imagens/home.png" alt="Página inicial" class="imgMenu">&nbsp;Home</a>
            </li>
            <li class="linkMenu">
                <a href="curso.php" class="linkMenu" id="curso"><img src="_imagens/curso.png" alt="Página de cursos" class="imgMenu">&nbsp;Cursos</a>
            </li>
            <li class="linkMenu">
                <a href="tvonline.php" class="linkMenu" id="tv"><img src="_imagens/tv.png" alt="Página de Tv onlinde" class="imgMenu">&nbsp;Tv Online</a>
            </li>
            <li class="linkMenu">
                <a href="faucets.php" class="linkMenu" id="faucet"><img src="_imagens/faucet.png" alt="Página de faucets" class="imgMenu">&nbsp;Faucets</a>
            </li>
            <li class="linkMenu">
                <span id="lojaBreve">Em breve</span>
                <a href="#" class="linkMenu"><img src="_imagens/loja.png" alt="Página inicial" class="imgMenu">&nbsp;Loja</a>
            </li>
        </ul>
</nav>

<script>
    function mostrarMenu(){

        let menu = document.getElementById("menuOpacit")
        menu.style.display = "block"
        let imgClose = document.querySelector("img#iconMenuOpen")
        //imgClose.style.display = "none";
        //imgClose.src = "_imagens/iconMenuClose.png";
        let box = document.getElementById("iconMenuResponsivo")
        box.innerHTML = `<img src="_imagens/iconMenuClose.png" class="iconMenu" id="iconMenuClose" onclick="fecharMenu()">`
        
    }

    function fecharMenu(){


        let menu = document.getElementById("menuOpacit")
        
        menu.style.display = "none"
        let imgClose = document.querySelector("img#iconMenuClose")
        imgClose.style.display = "none"
        let box = document.getElementById("iconMenuResponsivo")
        box.innerHTML = `<img src="_imagens/iconMenuOpen.png" class="iconMenu" id="iconMenuOpen" onclick="mostrarMenu()">`
    
    }
</script>

