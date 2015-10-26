<?php

use yii\helpers\Html;
use yii\grid\GridView;
use barcode\barcode\BarcodeGenerator;
use yii\helpers;
use backend\Modules\inventory\models\Gas;
use backend\Modules\inventory\models\Unit;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\inventory\models\TankSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ท่อ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tank-index">

    <div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> รายการท่อในฐานข้อมูล</i></h3>
        </div>
    
        <div class="box-body">

        <p>
            <?= Html::a('เพิ่มท่อใหม่', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'id',
                [
                    'header' => 'Barcode',
                    'format' => 'raw',
                    'value' => function($model) {
                        return helpers\Html::tag('div', '', ['id' => 'barcode-' . $model->tankno]) .
                                BarcodeGenerator::widget(['elementId' => 'barcode-' . $model->tankno,
                                    'value' => $model->tankno,
                                    'type' => 'code128',
                        ]);
                    },
                        ],
                        'tankno',
                        [
                        'header' => 'แก๊ส',
                        'format' => 'raw',
                        'value' => function ($data) {
                            $rows = Gas::find()->where(['id' => $data->gas_id])->one();
                            return $rows->gas_name;
                        },

                        ],

                        [
                        'header' => 'ปริมาตร',
                        'format' => 'raw',
                        'value' => function ($data) {
                            $rows = Unit::find()->where(['id' => $data->unit_id])->one();
                            return $data->vol . ' ' . $rows->unitname;
                            },

                        ],
                        [
                        'header' => 'ปีที่ตรวจสอบ',
                        'format' => 'raw',
                        'value' => function ($data) {

                            return substr($data->year_check,0,7);
                            },

                        ],

                        //'date_modify',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>
        </div>
</div>
