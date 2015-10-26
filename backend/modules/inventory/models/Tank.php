<?php

namespace backend\Modules\inventory\models;

use Yii;

/**
 * This is the model class for table "tank".
 *
 * @property integer $id
 * @property string $tankno
 * @property integer $gas_id
 * @property integer $unit_id
 * @property string $vol
 * @property string $year_check
 * @property string $date_modify
 *
 * @property Inventory[] $inventories
 * @property Gas $gas
 * @property Unit $unit
 */
class Tank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tankno', 'gas_id', 'unit_id'], 'required'],
            [['gas_id', 'unit_id'], 'integer'],
            [['year_check', 'date_modify'], 'safe'],
            [['tankno'], 'string', 'max' => 20],
            [['vol'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tankno' => 'รหัสท่อ',
            'gas_id' => 'แก๊สที่บรรจุ',
            'unit_id' => 'หน่วย',
            'vol' => 'ปริมาตรท่อ',
            'year_check' => 'ปีที่ตรวจสอบ',
            'date_modify' => 'Date Modify',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['tank_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGas()
    {
        return $this->hasOne(Gas::className(), ['id' => 'gas_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['id' => 'unit_id']);
    }
}
