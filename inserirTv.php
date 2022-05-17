<?php

    $linkTv = htmlspecialchars($_GET['linkTv']);
    $imagemTv = htmlspecialchars($_GET['imagemTv']);   
    $nomeTv = htmlspecialchars($_GET['nomeTv']);
    $idTv = htmlspecialchars($_GET['idTv']);

    require_once "_class/conexaoClass.php";
    require_once "_class/tvOnlineClass.php";

    $c = new conexaoClass();
    $tv = new tvOnlineClass();

    $tv->setIdTv($idTv);
    $tv->setNomeTv($nomeTv);
    $tv->setImagemTv($imagemTv);
    $tv->setLinkTv($linkTv);

    $c->inserirTv($tv->getIdTv(),$tv->getNomeTv(),$tv->getImagemTv(),$tv->getLinkTv());

