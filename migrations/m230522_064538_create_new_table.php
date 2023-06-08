<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%new}}`.
 */
class m230522_064538_create_new_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaksi}}', [
            'id' => $this->primaryKey(),
            'kode_transaksi' => $this->string()->notNull(),
            'id_barang' => $this->integer(),
            'tgl_transaksi' => $this->string()->notNull(),
            'user_input' => $this->integer(),
            'status_transaksi' => $this->string()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaksi}}');
    }
}
