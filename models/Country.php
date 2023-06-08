<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 */
class Country extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'Country';
    }
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['population',], 'integer'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52].
            [['code'], 'unique'],
        ];
    }
    public function attributeLabels()
    {
        return[
            'code' => 'Code',
            'name' => 'Name',
            'population' => 'Population',
        ];
    }
}
