<?php
/**
 * Created by PhpStorm.
 * User: Aleks
 * Date: 21.01.2019
 * Time: 19:00
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Article;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        $article = Article::find()->asArray()->all();
        return $this->render('index', compact('article'));
    }
}