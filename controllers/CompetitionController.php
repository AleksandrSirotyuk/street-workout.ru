<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Competition;
use app\models\CompetitionCreatingForm;
use Yii;

class CompetitionController extends Controller
{
    public function actionIndex()
    {
        $competition_model = new Competition();
        $competitions = $competition_model->getCompetitions();
        return $this->render('index', compact('competitions'));
    }
    public function actionCreating(){
        $creatingForm = new CompetitionCreatingForm();
        if (isset($_POST['CompetitionCreatingForm'])) {
            $creatingForm->attributes = Yii::$app->request->post('CompetitionCreatingForm');
            if($creatingForm->validate() &&  $creatingForm->signUp()){
                return $this->redirect('/competitions');
            }
        }
        return $this->render('creating', compact('creatingForm'));
    }
}