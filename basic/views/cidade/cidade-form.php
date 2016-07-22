<?php
	use \yii\bootstrap\ActiveForm;
	use \yii\helpers\Html;
	use app\models\Estado;
	use \yii\helpers\ArrayHelper;
	//use yii\bootstrap\Dropdown;
$this->title = 'Cidades';
$this->params['breadcrumbs'][] = ['label' => 'Cidades', 'url' => ['cidade/ver-cidades']];
$this->params['breadcrumbs'][] = $model->cidade;

?>

<h2>Formulário de Cadastro de Cidade</h2>
<hr>

<?php
//var_dump(Estado::findOne(3)->estado);
//die();
?>

<?php $form = ActiveForm::begin() ?>
	<?= $form->field($model, 'cidade') ?>
	<?
	
	/*var_dump(Estado::find()->orderBy('estado')->asArray()->all());
	die;*/
	
	?>
	
    <?= 
    $form->field($model, 'idEstado')->dropDownList(ArrayHelper::map(Estado::find()->orderBy('estado')->all(),'idEstado','estado'),['prompt'=>'Selecione um estado']); 

    ?>	



	<div class="form-group">
		<?= Html::submitButton('Enviar Dados',['class'=>'btn btn-primary']) ?>
	</div>

<?php ActiveForm::end() ?>