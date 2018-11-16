<?php
    $this->title = 'Регистрация';

    use yii\widgets\ActiveForm;
?>
<div class="container-fluid">
    <div class="col-md-4 col-md-offset-4">
        <h1 align="center">Регистрация</h1>

        <?php
            $form = ActiveForm::begin(['class' => 'form-horizontal', 'id' => 'registration-form']);
        ?>
        <?= $form->field($registrationForm, 'login'); ?>
        <?= $form->field($registrationForm, 'email'); ?>
        <?= $form->field($registrationForm, 'password')->passwordInput(); ?>
        <?= $form->field($registrationForm, 'repeatPassword')->passwordInput(); ?>
        <div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </div>
        <?php
            ActiveForm::end();
        ?>
    </div>
</div>