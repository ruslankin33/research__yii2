<?php

namespace app\controllers;
use yii\web\Controller;

Class CustomersController extends Controller

{
	public function actionIndex()
	{
		return $this->render('index');
		//$records = $this->findRecordByQuery();
		//return $this->render('index', compact('records'));
	}
}