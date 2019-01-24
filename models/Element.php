<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Element extends ActiveRecord
{
    public function addElement($id){
        $element = Yii::$app->db->createCommand('SELECT * FROM `user_element` 
            WHERE `user_element`.`id_user` = :id_user AND `user_element`.`id_element` = :id_element',
            [':id_element' => $id, ':id_user' => Yii::$app->user->identity['id']])->queryAll();
        if(!$element) {
            Yii::$app->db->createCommand('INSERT INTO `user_element` (`id_user`, `id_element`)
                VALUES (:id_user,:id_element)',
                [':id_element' => $id, ':id_user' => Yii::$app->user->identity['id']])->query();
        }
        return true;
    }
}