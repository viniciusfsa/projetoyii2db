<?php

namespace app\models;

use yii\db\ActiveRecord;

class Cidade extends ActiveRecord
{
	//public $cidade;
	//public $idEstado;
		
	public function rules()
	{
		return [
			[['cidade','idEstado'],'required'],
			[['cidade','idEstado'],'string'],
			
		];
	}

	public function attributeLabels()
	{
		return[
			'cidade' => 'Nome da Cidade',
			'idEstado' => 'Nome do Estado'
		];
	}

	



}