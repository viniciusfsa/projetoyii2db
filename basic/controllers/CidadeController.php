<?php

namespace app\controllers;

use yii\base\Controller;
use app\models\Cidade;
use yii\data\Pagination;
use Yii;

class CidadeController extends Controller
{
	public function actionFormulario(){
		$cidadeModel = new CidadeModel;
		$post = Yii::$app->request->post();

		if($cidadeModel->load($post) && $cidadeModel->validate()) {
			return $this->render ('form-cidade-confirmacao',[
			'model'=>$cidadeModel
			]);
		}

		else{
			return $this->render ('form-cidade',[
			'model'=>$cidadeModel
			]);
		}
		
		
	}


	

	public function actionCadastro(){
		$cidadeModel = new Cidade;
		$post = Yii::$app->request->post();		


		if ($cidadeModel->load(Yii::$app->request->post()) && $cidadeModel->save()) {			
			return $this->render ('view',[
			'model'=>$cidadeModel
			]);			
		}

		else{			
			return $this->render ('cidade-form',[
			'model'=>$cidadeModel
			]);
			
		}

	}


	public function actionVerCidades(){
		$query = Cidade::find();
		$pagination = new Pagination([
			'defaultPageSize' =>10,
			'totalCount' =>$query->count()
		]);

		$cidades = $query->orderBy('cidade')
					->offset($pagination->offset)
					->limit($pagination->limit)
					->all();

		return $this->render('cidade-grid', [
			'cidades' => $cidades,
			'pagination' => $pagination
		]);
	}

	

}



?>