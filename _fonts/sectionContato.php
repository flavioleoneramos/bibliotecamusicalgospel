<style>
  span.mensagem{
    margin: 20px;
    color: brown;
    font-weight: bold;
    font-size: 15pt;
  }
</style>
</br><h3>Entre em contato através do formulário abaixo:</h3></br>

<form method="get" action="_contr/contatoMsg.php" enctype="multipart/form-data">
  <label for="contatoNome">Nome: </label><input type="text" name="contatoNome" id="contatoNome" required></br></br>
  <label for="contatoEmail">Email: </label><input type="email" name="contatoEmail" id="contatoEmail" required></br></br>
  <label for="contatoMsg">Mensagem: </label><textarea type="text" name="contatoMsg" id="contatoMsg"></textarea></br></br>
  <input type="submit" value="Enviar mensagem" class="botao">
</form>