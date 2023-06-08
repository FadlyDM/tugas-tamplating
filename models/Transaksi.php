<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property string $kode_transaksi
 * @property int|null $id_barang
 * @property string $tgl_transaksi
 * @property int|null $user_input
 * @property string $status_transaksi
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_transaksi', 'tgl_transaksi', 'status_transaksi'], 'required'],
            [['id_barang', 'user_input'], 'integer'],
            [['kode_transaksi', 'tgl_transaksi', 'status_transaksi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_transaksi' => 'Kode Transaksi',
            'id_barang' => 'Id Barang',
            'tgl_transaksi' => 'Tgl Transaksi',
            'user_input' => 'User Input',
            'status_transaksi' => 'Status Transaksi',
        ];
    }
}
