<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
    	
    	$model = new \app\modules\admin\models\Country;
    	$model['code'] = 'ykm';
    	echo "<pre>";
    
    	foreach ($model as $name => $value){
    		echo "$name:$value\n";
    	}
    	echo "<hr>";
    	echo $model->getAttributeLabel('code');
       // return $this->render('index');
    }
}
