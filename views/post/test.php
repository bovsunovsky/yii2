<h1>TEST view</h1>

<?php
use yii\widgets\ActiveForm;
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
<?= $form->field($model, 'text')->textarea(['rows'=>5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php  ActiveForm::end() ?>
