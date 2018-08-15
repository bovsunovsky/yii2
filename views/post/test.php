<h1>TEST view</h1>

<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']]) ?>
<?= $form->field($model, 'name')->label('Имя') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows'=>5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php  ActiveForm::end() ?>
