<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Unit */

$this->title = 'เพิ่มหน่วยวัด';
$this->params['breadcrumbs'][] = ['label' => 'Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-create">
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
