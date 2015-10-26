<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Tankstatus */

$this->title = 'แก้ไขรายละเอียดสถานะ : ' . ' ' . $model->tank_status_name;
$this->params['breadcrumbs'][] = ['label' => 'Tankstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tankstatus-update">

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
