<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\inventory\models\TankstatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tankstatuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tankstatus-index">

    <div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> รายการสถานะท่อ</i></h3>
        </div>
    
        <div class="box-body">

    <p>
        <?= Html::a('เพิ่มสถานะท่อ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'tank_status_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
