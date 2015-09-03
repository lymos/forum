<?php
/**
 * account model
 * 
 */
namespace backend\models;

use Yii;
use yii\base\Model;

class AccountModel extends Model{
	public $username;
	public $password;
	public $captcha;
	public $rememberme;

	public function login($params = array()){

	}
}
?>
