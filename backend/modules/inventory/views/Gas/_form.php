<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Gas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gas_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gas_name_th')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
