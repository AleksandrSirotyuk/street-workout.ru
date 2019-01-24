<?php
$this->title = 'Создание соревнования';

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Pjax;
?>
<?php Pjax::begin([
    'timeout' => 5000,
    'clientOptions' => ['method' => 'POST'],
    'enablePushState' => false,
]); ?>
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $('.form-creating').hide().animate({opacity: "show"}, 1000);-->
<!--    });-->
<!--</script>-->
<div class="container-fluid">
    <h3 align="center"><a href="<?= Url::to(['/competitions']) ?>">Список соревнований</a> | Создать соревнование</h3>
    <?php if(!Yii::$app->user->isGuest): ?>
        <div class="col-md-5 col-md-offset-4 form-creating">
            <?php
            $form = ActiveForm::begin(['class' => 'form-horizontal', 'id' => 'registration-form']);
            ?>
            <?= $form->field($creatingForm, 'competition_name'); ?>
            <?= $form->field($creatingForm, 'city'); ?>
            <?= $form->field($creatingForm, 'id_type_competition'); ?>
            <?= $form->field($creatingForm, 'date'); ?>
            <?= $form->field($creatingForm, 'age_from'); ?>
            <?= $form->field($creatingForm, 'age_to'); ?>
            <div>
                <button type="submit" class="btn btn-primary">Создать соревнование</button>
            </div>
            <?php
            ActiveForm::end();
            ?>
        </div>
    <?php else: ?>
        <p align="center" class="log_in">Для создания соревнования необходимо <a href="<?= Url::to(['/site/authorization']) ?>">авторизироваться</a></p>
    <?php endif; ?>
</div>
<?php Pjax::end();?>