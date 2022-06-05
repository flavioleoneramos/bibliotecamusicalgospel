<?php

$tituloNoticia = $_GET["tituloNoticia"];
$imagemNoticia = $_GET["imagemNoticia"];
$corpoNoticia = $_GET["corpoNoticia"];


?>

<h1><?php echo $tituloNoticia;?></h1>
<img src="<?php echo $imagemNoticia;?>" alt="<?php echo $tituloNoticia;?>">
<p><?php echo $corpoNoticia;?></p>

