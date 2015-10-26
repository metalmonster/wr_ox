<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\inventory\models\GasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ก๊าช';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gas-index">

    <div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> รายการก๊าชในฐานข้อมูล</i></h3>
        </div>
    
        <div class="box-body">
    <p>
        <?= Html::a('เพิ่ม ก๊าช', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gas_name',
            'gas_name_th',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
