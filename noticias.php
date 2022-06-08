<?php
session_start();
//chamar as noticias via banco 
//direcionar para display noticias
    
//require_once "_class/usuarioClass.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="_css/styleAll.css">
    <link rel="stylesheet" href="_css/styleResponsive.css">
    <link rel="stylesheet" href="_css/styleButton.css">
    <link rel="stylesheet" href="_css/styleLink.css">
    <link rel="stylesheet" href="_css/styleLinkMenu.css">
    <title>Biblioteca Musical Gospel</title>
    <style>
        #noticia{
            text-decoration: underline;
        }

        section#noticias{
            width: 100%;
            margin: 20px auto 20px auto;
            text-align: center;
        }

        section#noticias ul li{
            margin: 20px auto 20px auto;
            padding: 10px;
        }

        section#noticias ul li figure#figureNews{
            position: relative;
            margin: 10px auto 10px auto;
        }

        section#noticias ul li figure#figureNews figcaption{
            position: absolute;
            padding: 10px;
            width: 100%;
            height: 100%;
            color: white;
            font-weight: bold;
            top: 0;
            left: 0;
        }

        section#noticias ul li figure#figureNews figcaption:hover{
            background-color: rgba(0, 0, 0, 0,5);
        }
    </style>
</head>
<body>
    
<div id="interface">
<header id="headerAll">
    <?php 
        require_once '_fonts/headerAll.php';
        
    ?>
</header>
<section id="noticias">
    <?php 
        require_once '_fonts/sectionNoticias.php';
    ?>
</section>
<footer id="footerAll">
    <?php 
        require_once '_fonts/footerAll.php';
    ?>
</footer>
</div>
    <script src="_js/script.js"></script>
</body>
</html>

