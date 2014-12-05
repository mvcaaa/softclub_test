<?php

namespace app\models;

use Yii;

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
            [['created_at'], 'safe'],
            [['email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'created_at' => 'Created At',
        ];
    }

    public function behaviors()
    {
        return array(
            'created_at' => array(
                'class' => 'yii\behaviors\AutoTimestamp'
            )
        );
    }

}
