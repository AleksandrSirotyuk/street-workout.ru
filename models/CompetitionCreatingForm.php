<?php

namespace app\models;

use yii\base\Model;
use Yii;

class CompetitionCreatingForm extends Model
{
    public $competition_name;
    public $city;
    public $id_type_competition;
    public $date;
    public $age_from;
    public $age_to;
    public $id_creator;

    public function attributeLabels()
    {
        return [
            'competition_name' => 'Название соревнования:',
            'city' => 'Город:',
            'id_type_competition' => 'Тип соревнования:',
            'date' => 'Дата:',
            'age_from' => 'Возраст от:',
            'age_to' => 'до:',
        ];
    }

    public function rules()
    {
        return [
            [['competition_name', 'city', 'id_type_competition', 'date', 'age_from','age_to'], 'required'],
            ['competition_name', 'string', 'min' => 3],
            ['city', 'string', 'min' => 3],
        ];
    }

    public function signUp(){
        $competition = new Competition();
        $competition->competition_name = $this->competition_name;
        $competition->city = $this->city;
        $competition->id_type_competition = $this->id_type_competition;
        $competition->id_creator = Yii::$app->user->identity['id'];
        $competition->date = $this->date;
        $competition->age_from = $this->age_from;
        $competition->age_to = $this->age_to;
        return $competition->save();
    }
}