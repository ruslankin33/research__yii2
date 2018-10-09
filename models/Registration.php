<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Registration extends ActiveRecord
{
	public static function tableName() 
	{
		return '{{registration}}';
	}

	public function rules()
	{
		return [
			[['email','password','name','phone'], 'required'],
			['email', 'string', 'max'=>50],
			['password', 'string', 'max'=>50],
			['name', 'string', 'max'=>20],
			['surname', 'string', 'max'=>30],
			['phone', 'string', 'max'=>12],
		];
	}
}