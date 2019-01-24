<?php
/**
 * Created by PhpStorm.
 * User: Aleks
 * Date: 04.12.2018
 * Time: 9:44
 */

namespace app\controllers;

use app\models\Element;
use yii\web\Controller;

class ElementController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
    public function action1lvl(){
        $element = Element::find()->asArray()->where(['level' => 1])->all();
        return $this->render('1lvl', compact('element'));
    }
    public function action2lvl(){
        $element = Element::find()->asArray()->where(['level' => 2])->all();
        return $this->render('2lvl', compact('element'));
    }
    public function action3lvl(){
        $element = Element::find()->asArray()->where(['level' => 3])->all();
        return $this->render('3lvl', compact('element'));
    }
    public function actionAdd($id){
        $element = new Element();
        $element->addElement($id);
        return true;
    }
}