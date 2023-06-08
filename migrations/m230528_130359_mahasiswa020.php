<?php

use yii\db\Migration;

/**
 * Class m230528_130359_mahasiswa020
 */
class m230528_130359_mahasiswa020 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa020}}',[
            'id' => $this->primarykey(),
            'nim' => $this->string(255)->notNull()->unique(),
            'nama' => $this->string(255)->notNull(),
            'kelas' => $this->string(255)->notNull(),
            'status' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230528_130359_mahasiswa020 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230528_130359_mahasiswa020 cannot be reverted.\n";

        return false;
    }
    */
}
