<?php

namespace backend\Modules\inventory\models;

use Yii;

/**
 * This is the model class for table "deal_tank".
 *
 * @property integer $id
 * @property string $deal_tan_name
 *
 * @property Inventory[] $inventories
 */
class DealTank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deal_tank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deal_tan_name'], 'required'],
            [['deal_tan_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'deal_tan_name' => 'Deal Tan Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['deal_tank_id' => 'id']);
    }
}
