<?php
/**
* menu model
*/
namespace backend\models;

use Yii;
use yii\base\Model;

class MenuModel extends Model{
	
	public $table;
	public $primary_key;
	public $attr;
	public function __construct(){
		$this->setParams();
		parent::__construct();
	}
	
	public function setParams(){
		$db = Yii::$app->db;
		$this->table = $db->quoteTableName('{{%menu}}');	// table like prefix_menu
		$this->primary_key = 'menu_id';
		$this->getFieldAttr();
	}

	public function addData($data){
		if(! $data || ! is_array($data)){
			return false;
		}
		$db = Yii::$app->db;
		$sql = 'insert into '.$this->table;
		$fields = $values = '';
		foreach($data as $field => $value){
			$fields .= $field.',';
			if($this->attr[$field] == 'varchar'){
				$values .= '"'.addslashes($value).'",';
			}else{
				$values .= $value.',';
			}
		}
		$fields = substr($fields, 0, -1);
		$values = substr($values, 0, -1);
		$sql .= ' ('.$fields.') values ('.$values.')';
		$command = $db->createCommand($sql);
		$status = $command->execute();
	}
	
	public function updateData($data, $where){
		$db = Yii::$app->db;
		$command = $db->createCommand($sql);
		$status = $command->execute();
	}
	
	public function getDataList($field = '*', $where){
		$db = Yii::$app->db;
		$command = $db->createCommand($sql);
		$data = $db->queryAll();
		return $data;
	}
	
	public function deleteData($where){
		$db = Yii::$app->db;
		$command = $db->createCommand($sql);
		$status = $command->execute();
	}
	
	public function getFieldAttr(){
		$db = Yii::$app->db;
		$sql = 'desc '.$this->table;
		$command = $db->createCommand($sql);
		$data = $command->queryAll();
		$attr = [];
		foreach($data as $rs){
			preg_match('/.*\(/', $rs['Type'], $matchs);
			if(strpos($matchs[0], '(')){
				$type = substr($matchs[0], 0, -1);
			}else{
				$type = $matchs[0];
			}
			$attr[$rs['Field']] = $type;
		}
		return $this->attr = $attr;
	}
}
?>
