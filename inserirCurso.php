<?php
$idCurso = $_POST["idCurso"];
$nomeCurso = $_POST["nomeCurso"];
$imagemCurso = htmlspecialchars(isset($_FILES["imagemCurso"]));
$linkCurso = $_POST["linkCurso"];
$linkComprar = $_POST["linkComprar"];
$imagemLinkCurso = htmlspecialchars(isset($_FILES["imagemLinkCurso"]));
$imagemLinkComprar = htmlspecialchars(isset($_FILES["imagemLinkComprar"]));
$descricaoCurso = $_POST["descricaoCurso"];

require_once "_class/conexaoClass.php";
require_once "_class/cursoClass.php";

$curso = new cursoClass();
$cso = new conexaoClass();

/*$curso->setIdCurso($idCurso);
$curso->setNomeCurso($nomeCurso);
$curso->setImagemCurso($imagemCurso);
$curso->setLinkCurso($linkCurso);
$curso->setLinkComprar($linkComprar);
$curso->setImagemLinkCurso($imagemLinkCurso);
$curso->setImagemLinkComprar($imagemLinkComprar);
$curso->setDescricaoCurso($descricaoCurso);*/

$cso->inserirCurso($idCurso,$nomeCurso,$imagemCurso,$linkCurso,$linkComprar,$imagemLinkCurso,$imagemLinkComprar,$descricaoCurso);



$uploaddir = '_imagens/';

$uploadImagemCurso = $uploaddir.basename($_FILES['imagemCurso']['name']);
$uploadImagemLinkCurso = $uploaddir.basename($_FILES['imagemLinkCurso']['name']);
$uploadImagemLinkComprar = $uploaddir.basename($_FILES['imagemLinkComprar']['name']);

if(move_uploaded_file($_FILES['imagemCurso']['tmp_name'],$uploadImagemCurso)){
    echo "Arquivo imagemCurso válido e enviado com sucesso.\n";
}else {
    echo "Possível ataque de upload de arquivo imagemCurso!\n";
}

if(move_uploaded_file($_FILES['imagemLinkCurso']['tmp_name'],$uploadImagemLinkCurso)){
    echo "Arquivo imagemLinkCurso válido e enviado com sucesso.\n";
}else {
    echo "Possível ataque de upload de arquivo imagemLinkCurso!\n";
}

if(move_uploaded_file($_FILES['imagemLinkComprar']['tmp_name'],$uploadImagemLinkComprar)){
    echo "Arquivo imagemLinkComprar válido e enviado com sucesso.\n";
}else {
    echo "Possível ataque de upload de arquivo imagemLinkComprar!\n";
}

echo "<a href='admin.php'>admin</a>";
?>