<style>
  #formRecuperaSenha{
    margin: auto;
    text-align: center;
  }
</style>
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

<div id="formRecuperaSenha">
<h1>Informe o código abaixo e redefina sua senha</h1>
<form method="post" action="redefiSenha.php">
  <label for="idCodigo">Código: </label><input type="text" name="idCodigo" id="idCodigo"></br>
  <label for="idNovaSenha">Nova senha: </label> <input type="password" name="idNovaSenha" id="idNovaSenha"></br>
  <input type="hidden" name="idEmail" value="<?php echo $emailRecupSenha;?>">
  <input type="submit" value="Redefinir senha">
</form>
</div>