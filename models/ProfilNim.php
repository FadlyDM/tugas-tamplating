<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_nim".
 *
 * @property int $nim
 * @property string $foto_profil
 * @property string $id_mahasiswa
 */
class ProfilNim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_nim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['foto_profil', 'id_mahasiswa'], 'required'],
            [['foto_profil', 'id_mahasiswa'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'foto_profil' => 'Foto Profil',
            'id_mahasiswa' => 'No. Induk Mahasiswa',
        ];
    }
}
