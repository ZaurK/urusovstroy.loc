<?php

use yii\db\Migration;

/**
 * Handles adding priority_photo to table `photo`.
 */
class m180529_092507_add_priority_photo_column_to_photo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('photo', 'priority', $this->integer(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('photo', 'priority');
    }
}
