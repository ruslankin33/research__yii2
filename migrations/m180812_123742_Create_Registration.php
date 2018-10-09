<?php

use yii\db\Migration;

class m180812_123742_Create_Registration extends Migration
{
    public function safeUp()
    {
        $this->createTable('registration', [
            'id' => $this->primaryKey(),
            'email' => $this->string(50)->unique()->notNull(),
            'password' => $this->string(50)->notNull(),
            'name' => $this->string(20)->notNull(),
            'surname' => $this->string(30),
            'phone' => $this->string(12)->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('registration');
    }
}
