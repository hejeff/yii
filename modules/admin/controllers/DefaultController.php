<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
    	

    	
    	
    	//$cache->set('H','heminghui');
    	
    	    	
        return $this->render('index');
    }
}
