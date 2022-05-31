<?php
  $emailRecupSenha = $_POST["emailRecupSenha"];
  //echo $emailRecupSenha;
  require_once "../_class/controlClass.php";
  $insere = new controlClass();
  $seedSenha = rand();
  $insere->insereCodigo($emailRecupSenha,$seedSenha);
?>

<script>
  alert("Informe o código recebido em seu email")
</script>
<?php

?>