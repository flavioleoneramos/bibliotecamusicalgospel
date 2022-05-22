<?php

    $linkFaucet = htmlspecialchars($_POST['linkFaucet']);
    $imagemFaucet = htmlspecialchars(isset($_POST['imagemFaucet']));   
    $nomeFaucet = htmlspecialchars($_POST['nomeFaucet']);
    $idFaucet = htmlspecialchars($_POST['idFaucet']);
    $descricaoFaucet = htmlspecialchars($_POST['descricaoFaucet']);

    require_once "_class/conexaoClass.php";
    require_once "_class/faucetClass.php";

    $cf = new conexaoClass();
    $fa = new faucetClass();

    /*$fa->setIdFaucet($idFaucet);
    $fa->setNomeFaucet($nomeFaucet);
    $fa->setImagemFaucet($imagemFaucet);
    $fa->setLinkFaucet($linkFaucet);
    $fa->setDescricaoFaucet($descricaoFaucet);*/

    $cf->inserirFaucet($idFaucet,$nomeFaucet,$imagemFaucet,$linkFaucet,$descricaoFaucet);

    $uploaddir = '_imagens/';
    $uploadfile = $uploaddir . basename($_FILES['imagemFaucet']['name']);

    if (move_uploaded_file($_FILES['imagemFaucet']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }
    
    echo "</br><a href='admin.php'>admin</a>";