<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\inventory\models\UnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'หน่วยวัด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-index">

    <div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> รายการ หน่วย</i></h3>
        </div>
    
        <div class="box-body">

    <p>
        <?= Html::a('เพิ่ม หน่วย', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'unitname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
