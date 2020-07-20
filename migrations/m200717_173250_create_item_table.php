<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%items}}`.
 */
class m200717_173250_create_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%item}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'sequence_number' => $this->integer()->notNull(),
            'position' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%item}}');
    }
}
