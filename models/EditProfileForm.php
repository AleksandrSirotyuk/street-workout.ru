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


class EditProfileForm extends Model
{
    public $login;
    public $password;
    public $last_name;
    public $name;
    public $patronymic;
    public $date_birth;
    public $experience;
    public $growth;
    public $weight;

    public function attributeLabels()
    {
        return [
            'login' => 'Логин:',
            'password' => 'Пароль:',
            'last_name' => 'Фамилия:',
            'name' => 'Имя:',
            'patronymic' => 'Отчество:',
            'date_birth' => 'Дата рождения:',
            'experience' => 'Стаж:',
            'growth' => 'Рост:',
            'weight' => 'Вес:'
        ];
    }

    public function rules()
    {
        return [
            ['login', 'string', 'min' => 4],
            ['password', 'string', 'min' => 5],
            [['login', 'password','last_name', 'name','patronymic', 'date_birth', 'experience', 'growth', 'weight'], 'safe'],
        ];
    }

    public function edit(){
        $user = User::findOne(Yii::$app->user->identity['id']);
        $user->login = $this->login;
        $user->last_name = $this->last_name;
        $user->name = $this->name;
        $user->patronymic = $this->patronymic;
        $user->date_birth = $this->date_birth;
        $user->experience = $this->experience;
        $user->growth = $this->growth;
        $user->weight = $this->weight;
        $user->password = Yii::$app->security->generatePasswordHash($this->password);
        return $user->save();
    }
}