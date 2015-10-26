<?php

namespace backend\Modules\inventory\models;

use Yii;

/**
 * This is the model class for table "unit".
 *
 * @property integer $id
 * @property string $unitname
 *
 * @property Tank[] $tanks
 */
class Unit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unitname'], 'required'],
            [['unitname'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unitname' => 'ชื่อหน่วย',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTanks()
    {
        return $this->hasMany(Tank::className(), ['unit_id' => 'id']);
    }
}
