<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Estado;
use \yii\bootstrap\ActiveForm;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\AlunoBeneficio */

$this->title = 'Cidades';
$this->params['breadcrumbs'][] = ['label' => 'Cidades', 'url' => ['cidade/ver-cidades']];
$this->params['breadcrumbs'][] = $model->cidade;
?>

<div class="well">

    <h1><?= Html::encode($this->title) ?></h1>

    <hr style="height:1px; border:none; background-color:#D0D0D0; margin-top: 10px; margin-bottom: 15px;" />

    
   
    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th style="text-align: right; width: 15%">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            'idCidade',
            'cidade',
            //'idEstado',
          
            [
                'attribute' => 'cidade.idEstado',
                'label' => 'Nome do Estado',
                'value' => Estado::findOne($model->idEstado)->estado,
            ],
            
        ],
    ]) ?>

</div>
