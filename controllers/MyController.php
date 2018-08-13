<?php

namespace app\controllers;


class MyController extends AppController
{

    public function actionIndex($id = null){
        $hi = 'Hello, WORLD !!';
        $names = ['ivanov','petrov','Sidorov'];
//        return $this->render('index',['hello'=>$hi , 'names'=>$names]);
        return $this->render('index',compact('hi','names', 'id'));
    }
}