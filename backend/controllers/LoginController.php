<?php
/**
* admin login controller
*/
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\AccountModel;

class LoginController extends Controller{

	public $layout = 'login';

	public function actions(){
		return [
			// 验证码
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
			//	'height' => 60,
			]
		];
	}
	
	public function actionIndex(){
		$account_model = new AccountModel();
		return $this->render('login', ['model' => $account_model]);
	}

	public function actionLogin(){
		$params = Yii::$app->request->post();
	}
}
?>
