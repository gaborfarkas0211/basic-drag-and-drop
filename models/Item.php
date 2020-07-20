<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $name
 * @property int $sequence_number
 * @property int $position
 */
class Item extends ActiveRecord
{
    const POSITION_LEFT = 1;
    const POSITION_RIGHT = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sequence_number'], 'required'],
            [['sequence_number'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sequence_number' => 'Sequence Number',
        ];
    }

    /**
     * Finds items by position
     *
     * @param integer $position
     * @return static|null
     */
    public static function getCurrentItems($position)
    {
        return static::find()->where(['position' => $position])->orderBy('sequence_number')->all();
    }

    public static function findById($id) {
        return static::findOne(['id' => $id]);
    }

    public static function convertItemsToWidget($position) {
        $items = [];
        $currentItems = self::getCurrentItems($position);
        $class = $position == self::POSITION_LEFT ? "list-left" : ($position == self::POSITION_RIGHT ? "list-right" : null);
        foreach ($currentItems as $item) {
            $items[$item->id] = ["content" => $item->name, "options" => ["class" => "list " . $class]];
        }

        return $items;
    }
}
