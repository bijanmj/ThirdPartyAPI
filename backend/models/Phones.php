<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "phones".
 *
 * @property integer $phone_id
 * @property string $phone_model
 * @property string $phone_condition
 * @property string $phone_imei
 * @property string $phone_created_date
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone_model', 'phone_condition', 'phone_imei', 'phone_created_date'], 'required'],
            [['phone_model', 'phone_condition'], 'string'],
            [['phone_created_date'], 'safe'],
            [['phone_imei'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'phone_id' => 'Phone ID',
            'phone_model' => 'Phone Model',
            'phone_condition' => 'Phone Condition',
            'phone_imei' => 'Phone Imei',
            'phone_created_date' => 'Phone Created Date',
        ];
    }
}
