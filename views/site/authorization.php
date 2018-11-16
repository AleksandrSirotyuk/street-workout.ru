<?php
$this->title = 'Авторизация';

use yii\widgets\ActiveForm;
?>
<div class="container-fluid">
    <div class="col-md-4 col-md-offset-4">
        <h1 align="center">Авторизация</h1>

        <?php
        $form = ActiveForm::begin(['class' => 'form-horizontal', 'id' => 'authorization-form']);
        ?>
        <?= $form->field($authorizationForm, 'login'); ?>
        <?= $form->field($authorizationForm, 'password')->passwordInput(); ?>
        <div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </div>
        <a id="sign_up_url" href="registration"> Зарегистрироваться</a>
        <?php
        ActiveForm::end();
        ?>
    </div>
</div>