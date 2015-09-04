<?php
/**
* 前台index 控制器
*
*/
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller{
	
	public $layout = 'index';

	public function actionIndex(){
		return $this->render('index');
	}
}
?>
