<?php

namespace app\controllers;

use app\models\EditProfileForm;
use app\models\RegistrationForm;
use app\models\User;
use Yii;
use yii\web\Controller;
use app\models\AuthorizationForm;


class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegistration(){
        $registrationForm = new RegistrationForm();
        if (isset($_POST['RegistrationForm'])) {
            $registrationForm->attributes = Yii::$app->request->post('RegistrationForm');
            if($registrationForm->validate() &&  $registrationForm->signUp()){
                return $this->redirect('authorization');
            }
        }
        return $this->render('registration', compact('registrationForm'));
    }

    public function actionAuthorization(){
        if(!Yii::$app->user->isGuest)
            return $this->goHome();
        $authorizationForm = new AuthorizationForm();
        if (isset($_POST['AuthorizationForm'])) {
            $authorizationForm->attributes = Yii::$app->request->post('AuthorizationForm');
            if($authorizationForm->validate()){
                Yii::$app->user->login($authorizationForm->getUser());
                return $this->goHome();
            }
        }
        return $this->render('authorization', compact('authorizationForm'));
    }

    public function actionLogout(){
        if(!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
            return $this->goHome();
        }
    }

    public function actionProfile(){
        $user = new User();
        $books = $user->getBooksByUserId(Yii::$app->user->identity['id']);
        return $this->render('profile', compact('books'));
    }

    public function actionEditProfile(){
        $editProfileForm = new EditProfileForm();
        if (isset($_POST['EditProfileForm'])) {
            $editProfileForm->attributes = Yii::$app->request->post('EditProfileForm');
            if($editProfileForm->validate() &&  $editProfileForm->edit()){
                return $this->goHome();
            }
        }
        return $this->render('edit-profile', compact('editProfileForm'));
    }
}
