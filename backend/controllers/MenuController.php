<?php
/**
* menu controller
*/
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\MenuModel;

class MenuController extends Controller{

	public $enableCsrfValidation = false;	// 400 bad request
	
	public function actionIndex(){

	}

	public function actionFetch(){
		$params = Yii::$app->request->get();
	//	error_log(print_r($params, 1)."\n", 3, '/tmp/forum.log');
		return $this->renderAjax($params['view']);
	}
	
	public function actionAdd(){
		$params = Yii::$app->request->post();
		$model_menu = new MenuModel;
		if(! $params['parent_id']){
			unset($params['parent_id']);
		}
		$model_menu->addData($params);
	}
}
?>
