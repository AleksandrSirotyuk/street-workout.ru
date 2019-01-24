<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Competition extends ActiveRecord
{
    public function getCompetitions(){
        $competitions = Yii::$app->db->createCommand('SELECT * FROM `competition` 
            JOIN `type_competition` ON `competition`.`id_type_competition` = `type_competition`.`id`
            JOIN `user` ON `competition`.`id_creator`= `user`.`id`')->queryAll();
        return $competitions;
    }
}