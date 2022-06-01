<?php
  $emailRecupSenha = $_POST["emailRecupSenha"];
  //echo $emailRecupSenha;
  require_once "../_class/controlClass.php";
  $insere = new controlClass();
  $seedSenha = rand();
  $insere->insereCodigo($emailRecupSenha,$seedSenha);
  $insere->enviaEmail($seedSenha,$emailRecupSenha);
?>

<script>
  alert("Informe o código recebido em seu email")
</script>

<h1>Informe o código abaixo e redefina sua senha</h1>
<form method="post" action="redefiSenha.php">
  <label for="idCodigo">Código: </label><input type="text" name="idCodigo" id="idCodigo">
  <label for="idNovaSenha">Nova senha: </label> <input type="password" name="idNovaSenha" id="idNovaSenha">
  <input type="submit" value="Redefinir senha">
</form>