<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bm_order".
 *
 * @property integer $id
 * @property string $own
 * @property string $username
 * @property string $number
 * @property double $amount
 * @property string $prepaid_time
 * @property integer $type
 * @property integer $status
 * @property integer $update_at
 * @property integer $create_at
 */
class BmNews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bm_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['own', 'prepaid_time', 'type', 'status', 'update_at', 'create_at'], 'integer'],
            [['amount'], 'number'],
            [['username', 'number'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'own' => 'Own',
            'username' => 'Username',
            'number' => 'Number',
            'amount' => 'Amount',
            'prepaid_time' => 'Prepaid Time',
            'type' => 'Type',
            'status' => 'Status',
            'update_at' => 'Update At',
            'create_at' => 'Create At',
        ];
    }
}
