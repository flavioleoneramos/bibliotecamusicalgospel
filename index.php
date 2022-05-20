<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/styleAll.css">
    <link rel="stylesheet" href="_css/styleResponsive.css">
    <link rel="stylesheet" href="_css/styleButton.css">
    <link rel="stylesheet" href="_css/styleLink.css">
    <link rel="stylesheet" href="_css/styleLinkMenu.css">
    <title>Biblioteca Musical Gospel</title>
    <style>
        #home{
            text-decoration: underline;
        }
        section#sectionIndex{
            width: 60%;
            float: left;
            margin: 20px auto 20px auto;
            text-align: center;
        }
        @media screen and (max-width: 800px){
        section#sectionIndex{
            width: 100%;
            margin: 20px auto 20px auto;
            text-align: center;
        }
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
<section id="sectionIndex">
    <?php 
        require_once '_fonts/sectionIndex.php';
    ?>
</section>
<aside id="asideAll">
    <?php 
        require_once '_fonts/asideAll.php';
    ?>
</aside>
<footer id="footerAll">
    <?php 
        require_once '_fonts/footerAll.php';
    ?>
</footer>
</div>
    <script src="_js/script.js"></script>
</body>
</html>

