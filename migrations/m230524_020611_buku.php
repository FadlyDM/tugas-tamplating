<?php

use yii\db\Migration;

/**
 * Class m230524_020611_buku
 */
class m230524_020611_buku extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{buku}}',[
            'id' => $this->primarykey(),
            'kode_buku' => $this->string(255)->notNull()->unique(),
            'judul' => $this->string(255)->notNull(),
            'jml_item' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230524_020611_buku cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230524_020611_buku cannot be reverted.\n";

        return false;
    }
    */
}
