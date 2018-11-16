<?php
$this->title = 'Редактирование профиля';

use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="container-fluid">
    <div class="col-md-4 col-md-offset-4">
        <h1 align="center">Редактирование профиля</h1>

        <?php
        $form = ActiveForm::begin(['class' => 'form-horizontal', 'id' => 'registration-form']);
        ?>
        <?= $form->field($editProfileForm, 'login'); ?>
        <?= $form->field($editProfileForm, 'password')->passwordInput(); ?>
        <?= $form->field($editProfileForm, 'last_name'); ?>
        <?= $form->field($editProfileForm, 'name'); ?>
        <?= $form->field($editProfileForm, 'patronymic'); ?>
        <?= $form->field($editProfileForm, 'date_birth'); ?>
        <?= $form->field($editProfileForm, 'experience'); ?>
        <?= $form->field($editProfileForm, 'growth'); ?>
        <?= $form->field($editProfileForm, 'weight'); ?>
        <div>
            <button type="submit" class="btn btn-primary">Редактировать профиль</button>
        </div>
        <?php
        ActiveForm::end();
        ?>
    </div>
</div>