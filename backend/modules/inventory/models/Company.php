<?php

namespace backend\Modules\inventory\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $tax_no
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address'], 'string'],
            [['name'], 'string', 'max' => 45],
            [['phone'], 'string', 'max' => 10],
            [['tax_no'], 'string', 'max' => 13]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อบริษัท',
            'phone' => 'เบอร์โทร',
            'address' => 'ที่อยู่',
            'tax_no' => 'รหัสเสียภาษี',
        ];
    }
}
