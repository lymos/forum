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

	/**
	 * do login
	 */
	public function actionLogin(){
		$params = Yii::$app->request->post();
		$account_model = new AccountModel();

		$login_status = $account_model->login($params);
		if($login_status){
			//showMessage('登录成功!');
			return $this->redirect('index.php?r=index');
		}else{
			//showMessage('登录失败,账号或密码错误!');
			return $this->redirect('index.php?r=login');
		}
	}
}
?>
