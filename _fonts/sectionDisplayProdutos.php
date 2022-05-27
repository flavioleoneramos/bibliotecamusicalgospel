<?php
$idTituloDisplay = isset($_GET["idTitulo"]);
$idDescricaoDisplay = isset($_GET["idDescricao"]);
$idImagemDisplay = isset($_GET["idImagem"]);
$idLinkAfiliadoSaberDisplay = isset($_GET["idLinkAfiliadoSaber"]);
$idLinkAfiliadoComprarDisplay = isset($_GET["idLinkAfiliadoComprar"]);
$idPrecoDisplay = isset($_GET["idPreco"]);
$idQrCodeDisplay = isset($_GET["idQrCode"]);


?>

<figure>
  <img src="_imagens/<?php echo $idImagemDisplay; ?>" alt="<?php echo $idTituloDisplay;?>">
  <figcaption>
    <h1><?php echo $idTituloDisplay;?></h1>
    <p><?php echo $idDescricaoDisplay;?></p>
    <p><a href="<?php echo $idLinkAfiliadoComprarDisplay ?>" class="botao">Comprar</a>&nbsp;<img src="<?php echo $idQrCodeDisplay;?>" 
    alt="<?php echo $idDescricaoDisplay ?>"></p>
  </figcaption>
</figure>