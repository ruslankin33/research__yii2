<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Media extends ActiveRecord
{
	public static function tableName()
	{
		return '{{media}}';
	}

	public function rules() {
		return [
			[['title', 'desc'], 'required'],
			['url', 'string', 'max'=>150],
			['title', 'string', 'max'=>150],
			['desc', 'string', 'max'=>2000],
		];
	}
}