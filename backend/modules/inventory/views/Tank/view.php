<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Tank */

$this->title = 'รายละเอียดท่อ ' . $model->tankno;
$this->params['breadcrumbs'][] = ['label' => 'Tanks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> รายละเอียด </i>  </h3>
        </div>
    
        <div class="box-body">
            <p>
                <?= Html::a('กลับหน้ารายการ', ['index'], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('เพิ่มท่อใหม่', ['create'], ['class' => 'btn btn-success']) ?>
                <?= Html::a('แก้ไขรายการนี้', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?=
                Html::a('ลบรายการนี้', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ])
                ?>
            </p>

            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'tankno',
                    'gas.gas_name',
                    'vol',
                    'unit.unitname',
                    'year_check',
                    'date_modify',
                ],
            ])
            ?>
        </div>



    </div>
</div>