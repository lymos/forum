<?php
/**
* admin login controller
*/
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class LoginController extends Controller{

	public $layout = 'login';
	public function actionIndex(){
		return $this->render('index');
	}
}
?>
