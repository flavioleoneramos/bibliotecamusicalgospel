<?php
$contatoNome = isset($_GET["contatoNome"]);
$contatoEmail = isset($_GET["contatoEmail"]);
$contatoMsg = isset($_GET["contatoMsg"]);

/*if(isset($_GET["contatoNome"])){
  echo "<span class='mensagem'>Obrigado pelo contato ".isset($_GET["contatoNome"]).", em breve retornaremos.</span>";
}else{
  echo "<span class='mensagem'>Obrigado pelo contato, em breve retornaremos.</span>";
}*/

require_once "../_class/conexaoClass.php";

$contatoC = new conexaoClass();
$contatoC->setContato($contatoNome,$contatoEmail,$contatoMsg);

?>