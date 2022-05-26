<?php
$contatoNome = htmlspecialchars(isset($_GET["contatoNome"]));
$contatoEmail = htmlspecialchars(isset($_GET["contatoEmail"]));
$contatoMsg = htmlspecialchars(isset($_GET["contatoMsg"]));

/*if(isset($_GET["contatoNome"])){
  echo "<span class='mensagem'>Obrigado pelo contato ".isset($_GET["contatoNome"]).", em breve retornaremos.</span>";
}else{
  echo "<span class='mensagem'>Obrigado pelo contato, em breve retornaremos.</span>";
}*/

require_once "../_class/conexaoClass.php";

$contato = new conexaoClass();
$contato->setContato($contatoNome,$contatoEmail,$contatoMsg);

?>