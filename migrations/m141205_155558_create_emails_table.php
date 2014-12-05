<?php

use yii\db\Schema;
use yii\db\Migration;

class m141205_155558_create_emails_table extends Migration
{
    public function up()
    {
        $this->createTable('emails', [
            'id' => 'pk',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL DEFAULT CURRENT_TIMESTAMP'
        ]);
    }

    public function down()
    {
        $this->dropTable('emails');
    }
}
