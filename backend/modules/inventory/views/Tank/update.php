<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Tank */

$this->title = 'แก้ไขรายการท่อเลขที่ :' . ' ' . $model->tankno;
$this->params['breadcrumbs'][] = ['label' => 'Tanks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user">แก้ไขรายละเอียด</i></h3>
        </div>
    
        <div class="box-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>
