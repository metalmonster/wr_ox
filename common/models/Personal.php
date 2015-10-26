<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $user_id
 * @property string $fristname
 * @property string $lastname
 * @property string $tel
 * @property string $address
 *
 * @property Inventory[] $inventories
 * @property User $user
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['fristname', 'lastname', 'tel', 'address'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'fristname' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            'tel' => 'เบอร์โทร',
            'address' => 'ที่อยู่',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['personal_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
