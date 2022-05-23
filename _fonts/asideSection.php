<head>
    <link rel="stylesheet" href="_css/asideSection.css">
    <style>
        @media screen and (max-width: 800px){
            div#tvOnline{
                text-align: center;
                margin-bottom: 20px;
            }

            div#tvOnline ul{
                margin-left: -100px;
            }

            a#vejaMaisAside{
                float: right;
                margin-right: 20px;
            }

            
        }
    </style>
</head>

<div id="tvOnline">
<h3><em>Tv online</em></h3></br>


<?php
    require_once "_class/conexaoClass.php";
    $c = new conexaoClass();

    $c->mostrarTvAside();

?>
</br></br><a href="tvonline.php" class="link" id="vejaMaisAside">Veja mais em Tv Online</a></br></br>
</div>