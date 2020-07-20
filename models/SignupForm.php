<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $email;
    public $username;
    public $password;
    public $re_password;

    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => 'app\models\User'],
            
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => 'app\models\User'],
            ['username', 'string', 'max' => 30],

            [['password', 're_password'], 'required'],
            [['password', 're_password'], 'string', 'min' => 5],
            ['password', 'compare', 'compareAttribute'=>'re_password'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->email = $this->email;
        $user->username = $this->username;
        $user->setPassword($this->password);
        return $user->save();
    }
}
