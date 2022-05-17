<?php

    $linkFaucet = htmlspecialchars($_GET['linkFaucet']);
    $imagemFaucet = htmlspecialchars($_GET['imagemFaucet']);   
    $nomeFaucet = htmlspecialchars($_GET['nomeFaucet']);
    $idFaucet = htmlspecialchars($_GET['idFaucet']);
    $descricaoFaucet = htmlspecialchars($_GET['descricaoFaucet']);

    require_once "_class/conexaoClass.php";
    require_once "_class/faucetClass.php";

    $cf = new conexaoClass();
    $fa = new faucetClass();

    $fa->setIdFaucet($idFaucet);
    $fa->setNomeFaucet($nomeFaucet);
    $fa->setImagemFaucet($imagemFaucet);
    $fa->setLinkFaucet($linkFaucet);
    $fa->setDescricaoFaucet($descricaoFaucet);

    $cf->inserirFaucet($fa->getIdFaucet(),$fa->getNomeFaucet(),$fa->getImagemFaucet(),$fa->getLinkFaucet(),$fa->getDescricaoFaucet());

