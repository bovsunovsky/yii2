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
public function actionTest(){

 //   var_dump(Yii::$app);
    $this->debug(Yii::$app);
    return $this->render('test');
}
}