<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Dealtank */

$this->title = 'แก้ไขสถานะการแลกเปลี่ยนท่อ: ' . ' ' . $model->deal_tan_name;
$this->params['breadcrumbs'][] = ['label' => 'สถานะการแลกเปลี่ยนท่อ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deal_tan_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="dealtank-update">

    <div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> รายละเอียด</i></h3>
        </div>
    
        <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
