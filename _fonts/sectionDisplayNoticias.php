<?php

$tituloNoticia = $_GET["tituloNoticia"];
$imagemNoticia = $_GET["imagemNoticia"];
$resumoNoticia = $_GET["resumoNoticia"];
$corpoNoticia = $_GET["corpoNoticia"];


?>
<style>
  #news{
    width: 100%;
    text-align: center;
    margin: 20px auto 20px auto;
  }
</style>

<div id="news">
<h1><?php echo $tituloNoticia;?></h1>
<img src="<?php echo $imagemNoticia;?>" alt="<?php echo $tituloNoticia;?>">
<p><?php echo $corpoNoticia;?></p>


</div>