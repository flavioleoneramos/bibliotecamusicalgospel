<?php

$tituloNoticia = htmlspecialchars($_POST["tituloNoticia"]);
$imagemNoticia = htmlspecialchars(isset($_FILES["imagemNoticia"]));
$resumoNoticia = htmlspecialchars($_POST["resumoNoticia"]);
$corpoNoticia = htmlspecialchars($_POST["corpoNoticia"]);

require_once "_class/conexaoClass.php";
require_once "_class/noticiaClass.php";

    $cf = new conexaoClass();
    $noticia = new noticiaClass();

    $noticia->setTituloNoticia($tituloNoticia);
    $noticia->setImagemNoticia($imagemNoticia);
    $noticia->setCorpoNoticia($corpoNoticia);

    $uploaddir = '_imagens/';
    $uploadfile = $uploaddir . basename($_FILES['imagemNoticia']['name']);

    if (move_uploaded_file($_FILES['imagemNoticia']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }
    echo $uploadfile;
    $cf->inserirNoticia($noticia->getTituloNoticia(),$uploadfile,$resumoNoticia,$noticia->getCorpoNoticia());

    
    echo "</br><a href='admin.php'>admin</a>";