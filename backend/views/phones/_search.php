<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchPhones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'phone_id') ?>

    <?= $form->field($model, 'phone_model') ?>

    <?= $form->field($model, 'phone_condition') ?>

    <?= $form->field($model, 'phone_imei') ?>

    <?= $form->field($model, 'phone_created_date') ?>

    <?php // echo $form->field($model, 'phone_query_count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
