<?php
namespace app\modules\admin\models;

use yii\base\Model;

class Country extends Model{
	
	
	public $code;
	public $name;
	public $population;
	
	
	public function attributeLabels(){
		
		return [
				'code' => ' country code ',
				'name' => 'country name',
				'population' => 'population name',
		];
	}
	
	public function scenarios(){
		$scenarios = parent::scenarios();
		
	}
	
}