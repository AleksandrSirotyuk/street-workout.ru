<?php
/**
 * Created by PhpStorm.
 * User: Aleks
 * Date: 05.10.2018
 * Time: 7:33
 */

namespace app\models;

use yii\base\Model;
use app\models\User;
use Yii;

class RegistrationForm extends Model
{
    public $login;
    public $email;
    public $password;
    public $repeatPassword;

    public function attributeLabels()
    {
        return [
            'login' => 'Логин:',
            'email' => 'E-mail:',
            'password' => 'Пароль:',
            'repeatPassword' => 'Повторный пароль:',
        ];
    }

    public function rules()
    {
        return [
            [['login', 'email', 'password', 'repeatPassword'], 'required'],
            ['login', 'string', 'min' => 4],
            ['email', 'email'],
            ['email', 'unique', 'targetClass'=>'app\models\User'],
            ['password', 'string', 'min' => 5],
            ['repeatPassword', 'compare', 'compareAttribute'=>'password', 'message'=>"Пароли не совпадают"],
        ];
    }

    public function signUp(){
        $user = new User();
        $user->login = $this->login;
        $user->email = $this->email;
        $user->password = Yii::$app->security->generatePasswordHash($this->password);
        return $user->save();
    }
}