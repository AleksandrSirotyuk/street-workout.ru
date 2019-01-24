<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use Yii;

class User extends ActiveRecord implements IdentityInterface
{
    public static function findIdentity($id){
        return self::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null){

    }
    public function getId(){
        return $this->id;
    }
    public function getAuthKey(){

    }
    public function validateAuthKey($authKey){

    }

    /**
     * @param $id
     * @return string
     */
    public function getBooksByUserId($id){
        $books = Yii::$app->db->createCommand('SELECT `book`.`name`, `book`.`image`, `book`.`id` FROM `user` 
            JOIN `user_book` ON `user`.`id` = `user_book`.`id_user`
            JOIN `book` ON `user_book`.`id_book`= `book`.`id`
            WHERE `user`.`id` = :id', [':id' => $id])->queryAll();
        return $books;
    }
    public function deleteBook($id){
        Yii::$app->db->createCommand('DELETE FROM `user_book`
        WHERE `user_book`.`id_user` = :id_user AND `user_book`.`id_book` = :id_book',
        [':id_book' => $id, ':id_user' =>  Yii::$app->user->identity['id']])->query();
        return true;
    }
    public function getElementsByUserId($id){
        $elements = Yii::$app->db->createCommand('SELECT `element`.`name`, `element`.`image`, `element`.`id`, `element`.`level` 
            FROM `user` 
            JOIN `user_element` ON `user`.`id` = `user_element`.`id_user`
            JOIN `element` ON `user_element`.`id_element`= `element`.`id`
            WHERE `user`.`id` = :id', [':id' => $id])->queryAll();
        return $elements;
    }

    public function deleteElement($id){
        Yii::$app->db->createCommand('DELETE FROM `user_element`
        WHERE `user_element`.`id_user` = :id_user AND `user_element`.`id_element` = :id_element',
            [':id_element' => $id, ':id_user' =>  Yii::$app->user->identity['id']])->query();
        return true;
    }
}
