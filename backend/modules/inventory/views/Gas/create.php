<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Gas */

$this->title = 'เพิ่มก๊าชใหม่';
$this->params['breadcrumbs'][] = ['label' => 'Gas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gas-create">

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
