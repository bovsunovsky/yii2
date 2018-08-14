<?php
/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 13.08.2018
 * Time: 15:27
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
public function debug($arr){
  echo '<pre>'. print_r($arr, true) .'</pre>';
}
}
