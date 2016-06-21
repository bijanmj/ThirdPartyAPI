<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Phones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone_model')->dropDownList([ 'iPhone 3' => 'IPhone 3', 'iPhone 4' => 'IPhone 4', 'iPhone 5' => 'IPhone 5', 'iPhone 6' => 'IPhone 6', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'phone_condition')->dropDownList([ 'bad' => 'Bad', 'good' => 'Good', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'phone_imei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_created_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
