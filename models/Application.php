<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 */
class Application extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['description', 'income', 'number_of_dependants'], 'default', 'value' => null],
            [['first_name', 'last_name', 'date_of_birth'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['date_of_birth'], 'date', 'format' => 'php:Y-m-d'],
            ['date_of_birth', 'compare', 'compareValue' => date('Y-m-d'), 'operator' => '<=', 'message' => 'Date of birth cannot be in the future.'],
            [['description'], 'string'],
            [['income'], 'number'],
            [['number_of_dependants'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * 
     * @return array 
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'date_of_birth' => 'Date Of Birth',
            'description' => 'Description',
            'income' => 'Income',
            'number_of_dependants' => 'Number Of Dependants',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
