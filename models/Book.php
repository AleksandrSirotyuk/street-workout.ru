<?php
/**
 * Created by PhpStorm.
 * User: Aleks
 * Date: 08.11.2018
 * Time: 13:28
 */

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Book extends ActiveRecord
{
    public function addBook($id){
        $book = Yii::$app->db->createCommand('SELECT * FROM `user_book` 
            WHERE `user_book`.`id_user` = :id_user AND `user_book`.`id_book` = :id_book',
            [':id_book' => $id, ':id_user' => Yii::$app->user->identity['id']])->queryAll();
        if(!$book) {
            Yii::$app->db->createCommand('INSERT INTO `user_book` (`id_user`, `id_book`)
                VALUES (:id_user,:id_book)',
                [':id_book' => $id, ':id_user' => Yii::$app->user->identity['id']])->query();
        }
        return true;
    }
    public function rateBook($id, $mark){
        Yii::$app->db->createCommand('UPDATE `user_book`
            SET `user_book`.`mark_book` = :mark
            WHERE `user_book`.`id_book` = :id_book AND `user_book`.`id_user` = :id_user',
            [':id_book' => $id, ':mark' => $mark, ':id_user' => Yii::$app->user->identity['id']])->query();
        return true;
    }
    public function getMarkBook($id){
        $averageMark = Yii::$app->db->createCommand('SELECT AVG(mark_book)  FROM `user_book` 
            WHERE `user_book`.`id_book` = :id_book',
            [':id_book' => $id])->queryAll();
        return $averageMark;
    }
    public function getCommentBook($id){
        $commentBook = Yii::$app->db->createCommand('SELECT `comment`,`id_user`  FROM `user_book` 
            WHERE `user_book`.`id_book` = :id_book AND `user_book`.`comment` IS NOT NULL',
            [':id_book' => $id])->queryAll();
        return $commentBook;
    }
}