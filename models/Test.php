<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property integer $id
 * @property string $username
 * @property string $tel
 * @property integer $age
 * @property string $hobby
 * @property string $decr
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['age'], 'integer'],
            [['username', 'hobby', 'decr'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'tel' => '电话号码',
            'age' => '年龄',
            'hobby' => '爱好',
            'decr' => '简介',
            'sex' => '性别',
        ];
    }
}
