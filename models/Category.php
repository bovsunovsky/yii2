<?php
/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 17.08.2018
 * Time: 12:56
 */
namespace app\models ;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
public static function tableName()
{
    return 'categories';
}
}