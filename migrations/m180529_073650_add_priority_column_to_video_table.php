<?php

use yii\db\Migration;

/**
 * Handles adding priority to table `video`.
 */
class m180529_073650_add_priority_column_to_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('video', 'priority', $this->integer(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('video', 'priority');
    }
}
