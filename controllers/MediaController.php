<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Media;

class MediaController extends Controller
{
	public function actionSave() {
	
		/*$request = Yii::$app->request;
		if ($request->isPost) {
			$post = $request->post(); 
			print_r($post);
			die;*/
		$model = new Media;
		if ($model->load(Yii::$app->request->post())) {
			if ($model->save()) {
				print_r('!');
			}
		}
	}
}