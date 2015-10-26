<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\TankSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tank-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tankno') ?>

    <?= $form->field($model, 'gas_id') ?>

    <?= $form->field($model, 'unit_id') ?>

    <?= $form->field($model, 'vol') ?>

    <?php // echo $form->field($model, 'year_check') ?>

    <?php // echo $form->field($model, 'date_modify') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
