<?php
require_once('functions.php');
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.15/dist/css/uikit.min.css" />
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.15/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.15/dist/js/uikit-icons.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


<div class="uk-container uk-container-xsmall uk-margin-top">
  <p> <strong>Criptografar e Descriptografar mensagens</strong> </p>
  <form action="" method="post">
    <select class="uk-select" name="tipo">
      <option>Criptografar</option>
      <option>Descriptografar</option>
    </select><br><br>
    <textarea rows="8" required class="uk-textarea" name="mensagem" placeholder="mensagem"></textarea><br><br>
    <input required class="uk-input" type="text" name="senha" id="senha" placeholder="senha">
    <a href="#" onclick="getPassword()">Gerar senha forte</a><br><br>
    <button class="uk-button uk-button-primary" type="submit">Gerar</button>
    <a href="" class="uk-button">Resetar</a>
  </form>
  
  <br>
  <p class="uk-alert" style="overflow-wrap: break-word;"><?php echo $_POST['tipo'] === "Criptografar" ? encrypt($_POST['mensagem'], $_POST['senha']) :
    decrypt($_POST['mensagem'], $_POST['senha']); ?></p>
</div>

<script>
function getPassword() {
  var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ!@#$&";
  var passwordLength = 20;
  var password = "";

  for (var i = 0; i < passwordLength; i++) {
    var randomNumber = Math.floor(Math.random() * chars.length);
    password += chars.substring(randomNumber, randomNumber + 1);
  }
  document.getElementById('senha').value = password
}
</script>