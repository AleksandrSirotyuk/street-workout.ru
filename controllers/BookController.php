<?php
/**
 * Created by PhpStorm.
 * User: Aleks
 * Date: 08.11.2018
 * Time: 13:22
 */

namespace app\controllers;

use app\models\Book;
use app\models\CommentForm;
use yii\base\BaseObject;
use yii\web\Controller;
use Yii;

class BookController extends Controller
{
    public function actionIndex()
    {
        $book = Book::find()->asArray()->all();
        return $this->render('index', compact('book'));
    }
    public function actionView($id){
        $book = new Book();
        $book = Book::findOne($id);
        if(empty($book))
            throw new HttpException('404', 'Данной книги не существует');
        $averageMark = $book->getMarkBook($id);

        $commentForm = new CommentForm();
        if (isset($_POST['CommentForm'])) {
            $commentForm->attributes = Yii::$app->request->post('CommentForm');
            if($commentForm->validate()){
                $commentForm->writeComment($id);
            }
        }
        $commentBook = $book->getCommentBook($id);
        return $this->render('view', compact('book', 'averageMark', 'commentForm','commentBook'));
    }

    public function actionAdd($id){
        $book = new Book();
        $book->addBook($id);
        return true;
    }

    public function actionRate($id, $mark){
        $book  = new Book();
        $book->rateBook($id, $mark);
        return true;
    }
}