<?php

namespace backend\Modules\inventory\models;

use Yii;

/**
 * This is the model class for table "gas".
 *
 * @property integer $id
 * @property string $gas_name
 * @property string $gas_name_th
 *
 * @property Tank[] $tanks
 */
class Gas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gas_name'], 'required'],
            [['gas_name'], 'string', 'max' => 50],
            [['gas_name_th'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gas_name' => 'ชื่อย่อแก๊ส',
            'gas_name_th' => 'ชื่อแก๊ส',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTanks()
    {
        return $this->hasMany(Tank::className(), ['gas_id' => 'id']);
    }
}
