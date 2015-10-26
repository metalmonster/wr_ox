<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\inventory\models\Tank */

$this->title = 'เพิ่มท่อใหม่';
$this->params['breadcrumbs'][] = ['label' => 'Tanks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-user"> เพิ่มข้อมูลท่อใหม่</i></h3>
        </div>
    
        <div class="box-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
