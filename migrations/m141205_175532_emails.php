<?php

use yii\db\Schema;
use yii\db\Migration;

class m141205_175532_emails extends Migration
{
    public function up()
    {
        $this->addColumn('emails', 'updated_at', Schema::TYPE_DATETIME . ' NOT NULL DEFAULT CURRENT_TIMESTAMP');
    }

    public function down()
    {
        $this->dropColumn('emails', 'updated_at');
    }
}
