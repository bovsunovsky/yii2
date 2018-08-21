<?php
/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 13.08.2018
 * Time: 15:32
 */

namespace app\controllers;

use app\models\Category;
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
    $post = TestForm::findOne(2);
//    $post->email = '22@2.com';
//    $post->save(); // UPDATE для нескольких сразу исп. updateAll()

//        $post->delete();

 //       TestForm::deleteAll(['>'], 'id',3); // Удаление записи из базы, для нескольких исп.

        $model = new TestForm();
//    $model->name = 'Автор';
//    $model->email = 'mail@mail.com';
//    $model->text = 'Текст сообщения';
//    $model->save();




    if( $model->load(Yii::$app->request->POST())){
         if( $model->save()){
           Yii::$app->session->setFlash('success', 'Данные приняты !');
           return $this->refresh();
        }
        else {
            Yii::$app->session->setFlash('error', 'Ошибка');
        }
    }

return $this->render('test', compact('model'));
}
//  Работа с БД
    public function actionShow(){

 //   $cats = Category::find()->all();  // Выбрать все данные , выборка в виде обьекта

//      $cats = Category::find()  // выборка в виде обьекта
//                      ->orderBy(['id'=>SORT_DESC]) // сортировка по убыванию
//                      ->all();



//                        $cats = Category::find()
//                      ->asArray()  // достаём данные в виде массива
//                      ->all();

//                       $cats = Category::find()
//                        ->asArray()  // достаём данные в виде массива
//                        ->where('parent=691') // задаём условия отбора в виде строки
//                        ->where(['parent' => 691])   // задаём условия отбора в виде массива ключ => значение
//                        ->where(['like','title','pp']) // искать 'рр' в поле title
//                        ->where(['<=','id','695'])  // выбрать в поле id все поля значения которых меньше или равны 695
//                        ->where('parent=691')
//                        ->count(); // посчитать кол-во
//                        ->limit(1) //только первую запись
//                        ->all();

//        $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
//        $cats = Category::findBySql($query)->all();
//
//        $query = "SELECT * FROM categories WHERE title LIKE :search";      // в качестве LIKE передаём параметр
//        $cats = Category::findBySql($query, [':search' => '%pp%'])->all(); // так безопасно !!

      //  $cats =Category::find()->all(); //отложенная (ленивая) загрузка
        $cats =Category::find()->with('products')->all(); // жадная загрузка

         return $this->render('show',compact('cats'));
    }
}

