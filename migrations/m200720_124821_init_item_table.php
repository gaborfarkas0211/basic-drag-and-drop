<?php

use app\models\Item;
use yii\db\Migration;

/**
 * Class m200720_124821_init_item_table
 */
class m200720_124821_init_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $items = [
            ["name" => "Dog", "sequence_number" => 1, "position" => Item::POSITION_LEFT],
            ["name" => "Cat", "sequence_number" => 2, "position" => Item::POSITION_LEFT],
            ["name" => "Frog", "sequence_number" => 3, "position" => Item::POSITION_LEFT],
            ["name" => "Cow", "sequence_number" => 4, "position" => Item::POSITION_LEFT],
            ["name" => "Sheep", "sequence_number" => 5, "position" => Item::POSITION_LEFT],
            ["name" => "Lion", "sequence_number" => 6, "position" => Item::POSITION_LEFT],
            ["name" => "Pound", "sequence_number" => 1, "position" => Item::POSITION_RIGHT],
            ["name" => "Fish", "sequence_number" => 2, "position" => Item::POSITION_RIGHT],
            ["name" => "Foot", "sequence_number" => 3, "position" => Item::POSITION_RIGHT],
            ["name" => "Milk", "sequence_number" => 4, "position" => Item::POSITION_RIGHT],
            ["name" => "Super", "sequence_number" => 5, "position" => Item::POSITION_RIGHT],
            ["name" => "Heart", "sequence_number" => 6, "position" => Item::POSITION_RIGHT],
        ];
        foreach ($items as $item) {
            $this->insert('item', $item);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('item');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200720_124821_init_item_table cannot be reverted.\n";

        return false;
    }
    */
}
