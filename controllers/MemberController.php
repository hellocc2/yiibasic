<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;
class MemberController extends Controller{
	public $layout=false;
	public function actionAuth(){		
	
		
		
		return $this->render("auth");
	}
	
	
}