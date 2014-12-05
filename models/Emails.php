<?php

namespace app\models;

use Yii;
use yii\validators;

/**
 * This is the model class for table "emails".
 *
 * @property integer $id
 * @property string $email
 * @property string $created_at
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
            [['created_at'], 'safe'],
            [['updated_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Адрес Email',
            'created_at' => 'Создано',
            'updated_at' => 'Updated At',
        ];
    }

}
