<?php

use app\models\User;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m200715_182012_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull()->unique(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
        ]);

        $user = new User();
        $user->email = "admin@localhost.com";
        $user->username = "admin";
        $user->setPassword("admin123");
        $user->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
