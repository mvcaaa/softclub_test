<?php

use yii\db\Schema;
use yii\db\Migration;

class m141205_180636_emails extends Migration
{
    public function up()
    {
        $this->alterColumn('emails', 'created_at', Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
        $this->alterColumn('emails', 'updated_at', Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');

    }

    public function down()
    {
        echo "m141205_180636_emails cannot be reverted.\n";

        return false;
    }
}
