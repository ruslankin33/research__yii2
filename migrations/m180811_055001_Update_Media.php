<?php

use yii\db\Migration;

/**
 * Class m180811_055001_Update_Media
 */
class m180811_055001_Update_Media extends Migration
{

    public function safeUp()
    {
        $this->addColumn('media', 'title', 'varchar(150) default null');
        $this->addColumn('media', 'desc', 'varchar(2000) default null');
    }

    public function safeDown()
    {
        $this->dropColumn('media', 'title');
        $this->dropColumn('media', 'desc');
    }
}