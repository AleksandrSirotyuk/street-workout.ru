<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Fight extends ActiveRecord
{
    public function getUpcomingFights(){
        $fights = Yii::$app->db->createCommand('SELECT * FROM `fight` 
            JOIN `exercise` ON `fight`.`id` = `exercise`.`id_fight`
            JOIN `user_fight` ON `fight`.`id`= `user_fight`.`id_fight`
            JOIN `user` ON `user_fight`.`id_user`= `user`.`id`
            WHERE `user_fight`.`is_winner` IS NULL')->queryAll();
        return $fights;
    }
}