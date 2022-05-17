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
        section#sectionTvOnline{
            width: 100%;
            text-align: center;
            margin: 20px auto 20px auto;
        }

        section#sectionTvOnline ul{
            width: 100%;
            text-align: center;
        }

        section#sectionTvOnline ul li{
            display: inline-block;
            margin: 20px;
        }

        #tv{
            text-decoration: underline;
            background-color: #e30224;
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
<section id="sectionTvOnline">
    <?php 
        require_once '_fonts/sectionTvOnline.php';
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

