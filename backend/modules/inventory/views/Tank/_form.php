<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\Modules\inventory\models\Gas;
use backend\Modules\inventory\models\Unit;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Tank */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tank-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tankno')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'gas_id')->dropDownList(ArrayHelper::map(Gas::find()->all(), 'id', 'gas_name')) ?>

    <?= $form->field($model, 'vol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_id')->dropDownList(ArrayHelper::map(Unit::find()->all(), 'id', 'unitname')) ?>

    <?=
    $form->field($model, 'year_check')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'เลือก วันเดือนปีที่ทดสอบ'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'language' => 'th',
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::a('กลับหน้ารายการ', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'อัพเดท', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
