<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Dealtank */

$this->title = 'เพิ่มสถานะการแลกเปลี่ยนท่อใหม่';
$this->params['breadcrumbs'][] = ['label' => 'สถานะการแลกเปลี่ยนท่อ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dealtank-create">

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
