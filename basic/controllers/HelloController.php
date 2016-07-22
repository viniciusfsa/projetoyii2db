<?php
namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller{

	public function actionSaySomething($message='hello Vinicius'){
		return $this->render('say-something',[
			'message' => $message,

		]);
	}
}

?>

