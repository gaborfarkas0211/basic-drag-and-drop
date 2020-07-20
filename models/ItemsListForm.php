<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ItemsListForm is the model behind the Item form.
 */
class ItemsListForm extends Model
{
    public $sortListLeft;
    public $sortListRight;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['sortListLeft', 'sortListRight'], 'required'],
        ];
    }

    public function saveStatus() {
        if(empty($this->sortListLeft) || empty($this->sortListRight)) {
            return false;
        }

        $leftElements = explode(",", $this->sortListLeft);
        $rightElements = explode(",", $this->sortListRight);
        $array = array_merge($leftElements, $rightElements);
        
        for($i = 0; $i < count($array); $i++) {
            $item = Item::findById($array[$i]);
            $item->sequence_number = $i + 1;
            $item->save();
        }
        return true;
    }
}
