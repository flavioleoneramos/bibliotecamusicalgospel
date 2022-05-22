<?php

    $linkTv = htmlspecialchars($_POST['linkTv']);
    $imagemTv = htmlspecialchars(isset($_FILES["imagemTv"]));
    $nomeTv = htmlspecialchars($_POST['nomeTv']);
    $idTv = htmlspecialchars($_POST['idTv']);
    

    require_once "_class/conexaoClass.php";
    require_once "_class/tvOnlineClass.php";

    $c = new conexaoClass();
    $tv = new tvOnlineClass();

    $tv->setIdTv($idTv);
    $tv->setNomeTv($nomeTv);
    $tv->setImagemTv($imagemTv);
    $tv->setLinkTv($linkTv);

    $c->inserirTv($tv->getIdTv(),$tv->getNomeTv(),$tv->getImagemTv(),$tv->getLinkTv());





    $uploaddir = '_imagens/';
    $uploadfile = $uploaddir . basename($_FILES['imagemTv']['name']);
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['imagemTv']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }
    
    echo 'Aqui está mais informações de debug:';
    print_r($_FILES);
    
    print "</pre>";

    echo "<a href='admin.php'>admin</a>";










    ?>

