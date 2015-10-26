<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\inventory\models\DealtankSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สถานะการแลกเปลี่ยนท่อ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dealtank-index">

    <div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> รายการ</i></h3>
        </div>
    
        <div class="box-body">

    <p>
        <?= Html::a('เพิ่มสถานะการแลกเปลี่ยนท่อ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'deal_tan_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
