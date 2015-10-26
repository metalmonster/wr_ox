<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\inventory\models\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลบริษัท';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> ข้อมูลบริษัท</i></h3>
        </div>
    
        <div class="box-body">

  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'phone',
            'address:ntext',
            'tax_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
