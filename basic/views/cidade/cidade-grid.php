<?php
use \yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Estado;

$this->title = 'Cidades';
$this->params['breadcrumbs'][] = ['label' => 'Cidades', 'url' => ['cidade/ver-cidades']];
//$this->params['breadcrumbs'][] = $model->cidade;
?>

<h1>Cidades</h1>
<hr>

 <?= Html::a('Adicionar Cidade', ['cadastro'], ['class' => 'btn btn-primary']) ?>
<br>
<br>
<ul>
	<?php foreach($cidades as $cidade) : ?>
		<li>
			<?=$cidade->cidade. ' - '.Estado::findOne($cidade->idEstado)->estado ?>			
		</li>
	<?php endforeach ?>	
</ul>

<?= 
	LinkPager::widget(['pagination'=>$pagination]);
?>


<?php

?>