<?php
/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 13.08.2018
 * Time: 15:32
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;
class PostController extends AppController
{
  public $layout = 'basic';

  public function beforeAction($action)
  {
      if ($action->id == 'index') {
          $this->enableCsrfValidation = false ;
      }
      return parent::beforeAction($action);
  }

    public function actionIndex(){
    if (Yii::$app->request->isAjax){
        debug(Yii::$app->request->POST());
        return 'TEST';
    }

    $model = new TestForm();

return $this->render('test', compact('model'));
}

    public function actionShow(){
         return $this->render('show');
    }
}