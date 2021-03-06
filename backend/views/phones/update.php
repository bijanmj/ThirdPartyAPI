<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Phones */

$this->title = 'Update Phones: ' . $model->phone_id;
$this->params['breadcrumbs'][] = ['label' => 'Phones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->phone_id, 'url' => ['view', 'id' => $model->phone_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
