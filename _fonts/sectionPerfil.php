<?php
    require_once "_class/usuarioClass.php";
    $usuario = new usuarioClass();

    if($usuario->getPermissao() === 1){
        require_once "admin.php";
    }

    echo $usuario->getNome();
    echo $_SESSION["nome"];
?>