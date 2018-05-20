<?php

use yii\db\Migration;

/**
 * Handles adding position to table `photo`.
 */
class m180516_070805_add_position_column_to_photo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('photo', 'img_path', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('photo', 'img_path');
    }
}
