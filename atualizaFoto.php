<?php
session_start();

  $novaFotof =  htmlspecialchars(isset($_FILES["novaFoto"]));
  //echo $novaFotof;
    

    require_once "_class/conexaoClass.php";

    $c = new conexaoClass();

    $uploaddir = '_imagens/';
    $uploadfile = $uploaddir . basename($_FILES['novaFoto']['name']);
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['novaFoto']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }
    
    echo 'Aqui está mais informações de debug:';
    print_r($_FILES);
    
    print "</pre>";


    $c->mudarFoto($novaFotof,$_SESSION["idEmail"]);
    echo "<a href='perfil.php'>perfil</a>";










    ?>

