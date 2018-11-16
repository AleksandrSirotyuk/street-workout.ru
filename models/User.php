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
        $books = Yii::$app->db->createCommand('SELECT `book`.`name` FROM `user` 
            JOIN `user_book` ON `user`.`id` = `user_book`.`id_user`
            JOIN `book` ON `user_book`.`id_book`= `book`.`id`
            WHERE `user`.`id` = :id', [':id' => $id])->queryAll();
        return $books;
    }
}
