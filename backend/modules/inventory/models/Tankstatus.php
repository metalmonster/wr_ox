<?php

namespace backend\Modules\inventory\models;

use Yii;

/**
 * This is the model class for table "tank_status".
 *
 * @property integer $id
 * @property string $tank_status_name
 *
 * @property Inventory[] $inventories
 */
class Tankstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tank_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tank_status_name'], 'required'],
            [['tank_status_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tank_status_name' => 'สถานะท่อ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['tank_status_id' => 'id']);
    }
}
