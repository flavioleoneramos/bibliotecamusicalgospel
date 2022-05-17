<?php
$idCurso = $_GET["idCurso"];
$nomeCurso = $_GET["nomeCurso"];
$imagemCurso = $_GET["imagemCurso"];
$linkCurso = $_GET["linkCurso"];
$linkComprar = $_GET["linkComprar"];
$imagemLinkCurso = $_GET["imagemLinkCurso"];
$imagemLinkComprar = $_GET["imagemLinkComprar"];
$descricaoCurso = $_GET["descricaoCurso"];

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

$cso->inserirCurso($curso->getIdCurso(),$curso->getNomeCurso(),$curso->getImagemCurso(),$curso->getLinkCurso(),$curso->getLinkComprar(),$curso->getImagemLinkCurso(),$curso->getImagemLinkComprar(),$curso->getDescricaoCurso());


?>