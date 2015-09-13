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

	/**
 	* 验证登录
	*/
	public function login($params = array()){
		$db = Yii::$app->db;
		// validate
		if(! $this->load($params) && ! $this->validate()){
			return false;
		}
		
		$sql = 'select username from forum_account where username="'.$params['AccountModel']['username'].'" and password = "'.md5($params['AccountModel']['password']).'" limit 1';
		$command = $db->createCommand($sql);
		$data = $command->queryOne();
		if($data){
			return true;
		}else{
			return false;
		}
	}

	/**
	* 获取列表数据
	* @param array or string $fields 
	* @param string $where
	*/
	public function getDataList($fields = '*', $where = ''){
		$db = Yii::$app->db;
		if(is_array($fields)){
			$fields = implode(',', $fields);
		}

		$sql = 'select '.$fields.' from forum_account where 1=1 '.$where;
		$command = $db->createCommand($sql);
		$data = $command->queryAll();
		return $data;
	}

	public function addData($data = array()){
		$db = Yii::$app->db;
		$table_name = $db->quoteTableName('account'); 	// 表前缀 forum_
		$sql = 'insert into '.$table_name;
		$fields = $values = '';
		foreach($data as $field => $value){
			$fields .= $field.',';
			$values .= '"'.addslashes($value).'",';
		}
		$fields = substr($fields, 0, -1);
		$values = substr($values, 0, -1);
		$sql .= ' ('.$fields.') values ('.$values.')';
		$command = $db->createCommand($sql);
		$status = $command->execute();
		return $status;
	}

	public function updateData($data, $where = ''){
		if(! $where){
			return false;
		}
		$db = Yii::$app->db;
		$table_name = $db->quoteTableName('account');
		$sql = 'update '.$table_name.' set ';
		$set_data = '';
		foreach($data as $field => $value){
			$set_data .= $field.' = "'.$value.'", ';
		}
		$set_data = substr($set_data, 0, -1);
		$sql = $sql.$set_data.' where 1=1 '.$where;
		$command = $db->createCommand($sql);
		$status = $command->execute();
		return $status;
	}

	public function deleteData($where = ''){
		if(! $where){
			return false;
		}
		$db = Yii::$app->db;
		$table_name = $db->quoteTableName('account');
		$sql = 'delete from '.$table_name.' where 1=1 '.$where;
		$command = $db->createCommand($sql);
		$status = $command->execute();
		return $status;
	}	
}
?>
