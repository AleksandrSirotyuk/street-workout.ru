<?php
/**
 * Created by PhpStorm.
 * User: Aleks
 * Date: 05.10.2018
 * Time: 9:03
 */

namespace app\models;

use yii\base\Model;
use app\models\User;
use Yii;

class AuthorizationForm extends Model
{
    public $login;
    public $password;

    public function attributeLabels()
    {
        return [
            'login' => 'Логин:',
            'password' => 'Пароль:',
        ];
    }

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params){
        $user = $this->getUser();
        if(!$user || !Yii::$app->security->validatePassword($this->password, $user->password)){
           $this->addError($attribute, 'Логин/пароль введены неверно');
        }
    }

    public function getUser(){
        return User::findOne(['login' => $this->login]);
    }
}