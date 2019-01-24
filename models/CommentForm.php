<?php
/**
 * Created by PhpStorm.
 * User: Aleks
 * Date: 16.11.2018
 * Time: 12:09
 */

namespace app\models;

use yii\base\Model;
use Yii;

class CommentForm extends Model
{
    public $text;
    public $login;
    public function attributeLabels()
    {
        return [
            'text' => '',
        ];
    }
    public function rules()
    {
        return [
            ['text', 'required']
        ];
    }
    public function writeComment($id){
        Yii::$app->db->createCommand('UPDATE `user_book`
            SET `user_book`.`comment` = :comment
            WHERE `user_book`.`id_book` = :id_book AND `user_book`.`id_user` = :id_user',
            [':id_book' => $id, ':comment' => $this->text, ':id_user' => Yii::$app->user->identity['id']])->query();
        return true;
    }
}