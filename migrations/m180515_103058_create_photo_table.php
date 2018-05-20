<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo`.
 */
class m180515_103058_create_photo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('photo', [
            'id' => $this->primaryKey(),
            'id_category' => $this->integer(),
            'ptitle' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('photo');
    }
}
