<?php

use yii\db\Migration;

/**
 * Handles the creation of table `video`.
 */
class m180517_112628_create_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'vtitle' => $this->string(),
            'video_path' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('video');
    }
}
