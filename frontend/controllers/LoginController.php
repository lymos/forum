<?php
/**
* Login Controller
**/
namespace frontend\controllers;

use yii\web\Controller;

class LoginController extends Controller{
	
	public function actionIndex(){
		return $this->render('login');
	}
}
?>