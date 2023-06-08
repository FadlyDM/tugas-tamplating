<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tes".
 *
 * @property int $ww
 * @property int $wq
 */
class Tes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ww', 'wq'], 'required'],
            [['ww', 'wq'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ww' => 'Ww',
            'wq' => 'Wq',
        ];
    }
}
