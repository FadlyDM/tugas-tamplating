<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa020".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property int|null $kelas
 * @property string $status
 */
class Mahasiswa020 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa020';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'status'], 'required'],
            [['kelas', 'nama', 'status','nim'], 'string', 'max' => 255],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'status' => 'Status',
        ];
    }
}
