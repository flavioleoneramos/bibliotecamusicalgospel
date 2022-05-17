<head>
    <link rel="stylesheet" href="_css/asideSection.css">
</head>

<div id="tvOnline">
<h3><em>Tv online</em></h3></br>


<?php
    require_once "_class/conexaoClass.php";
    $c = new conexaoClass();

    $c->mostrarTvAside();

?>
</br></br><a href="tvonline.php" class="link">Veja mais em Tv Online</a>
</div>