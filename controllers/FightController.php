<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Fight;

class FightController extends Controller
{
    public function actionUpcomingFights()
    {
        $fightModel = new Fight();
        $upcomingFights = $fightModel->getUpcomingFights();
        return $this->render('upcoming-fights', compact('upcomingFights'));
    }
}