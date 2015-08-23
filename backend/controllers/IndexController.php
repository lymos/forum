<?php
/**
* admin IndexController
**/
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller{

	public $layout = 'admin'; // layout file
	public function actionIndex(){
		return $this->render('index');
	}
}
?>
