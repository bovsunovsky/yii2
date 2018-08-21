<h1>TEST view</h1>

<?php
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
?>

<?php if(Yii::$app->session->hasFlash('success')): ?>
<div class="alert alert-success" role="alert">
        <?php echo Yii::$app->session->getFlash('success'); ?>
</div>
<?php endif; ?>


<?php if(Yii::$app->session->hasFlash('error')): ?>
<div class="alert alert-danger" role="alert">
        <?php echo Yii::$app->session->getFlash('error'); ?>
</div>
<?php endif; ?>


<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']]) ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>

<?php echo $form->field($model, 'text')->widget(CKEditor::className(),[
'editorOptions' => [
'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
'inline' => false, //по умолчанию false
],
]);
?>

<?php // echo $form->field($model, 'text')->textarea(['rows'=>5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php  ActiveForm::end() ?>
