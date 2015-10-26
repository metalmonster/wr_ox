<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Gas */

$this->title = 'รายละเอียดก๊าช : ' . $model->gas_name;
$this->params['breadcrumbs'][] = ['label' => 'Gas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gas-view">

    <div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> รายละเอียด</i></h3>
        </div>
    
        <div class="box-body">

    <p>
        <?= Html::a('แก้ไขรายละเอียด', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'gas_name',
            'gas_name_th',
        ],
    ]) ?>
</div>
</div>
