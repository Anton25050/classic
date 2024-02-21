<?php

namespace app\models;

use yii\base\Model;

class LogForm extends Model
{
    public $login;
    public $password;
    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['login', 'string'],
        ];
    }
}