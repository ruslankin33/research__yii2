<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180808_152518_Create_Media
 */
class m180808_152518_Create_Media extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('media', [
            'id' => Schema::TYPE_PK,
            'url' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('media');
    }
}