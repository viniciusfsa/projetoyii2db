<?php
//\yii\helpers\Html::encode($message)

?>

<h2>O Valor da variável $message é <?= $message; ?></h2>


<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Service Desk - Solicitação de Atendimento</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tombo</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Informe o Tombo aqui" class="form-control input-md" required="">
  <span class="help-block">Tombo da máquina</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar Email</button>
  </div>
</div>

</fieldset>
</form>
