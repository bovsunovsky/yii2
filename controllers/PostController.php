<?php
/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 13.08.2018
 * Time: 15:32
 */

namespace app\controllers;

use Yii;
class PostController extends AppController
{
  public $layout = 'basic';

public function actionIndex(){
return $this->render('test');
}

    public function actionShow(){
      //  $this->layout = 'basic';
        return $this->render('show');
    }
}