<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customer`.
 */
class m171009_190801_create_customer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'birth_date' => $this->date(),
            'notes' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('customer');
    }
}
