<?php
/**
* menu controller
*/
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class MenuController extends Controller{

	public function actionIndex(){

	}

	public function actionFetch(){
		$params = Yii::$app->request->get();
	//	error_log(print_r($params, 1)."\n", 3, '/tmp/forum.log');
		return $this->renderAjax($params['view']);
	}
}
?>
