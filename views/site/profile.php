<?php
    $this->title = 'Личный кабинет';
?>

<div class="container-fluid">
    <h2>Личный кабинет</h2>
    Ваш логин: <?=Yii::$app->user->identity['login']; ?> <br/>
    ФИО:
    <?= Yii::$app->user->identity['last_name']; ?>
    <?= Yii::$app->user->identity['name']; ?>
    <?= Yii::$app->user->identity['patronymic']; ?><br/>
    Дата рождения:  <?= Yii::$app->user->identity['date_birth']; ?><br/>
    Стаж: <?= Yii::$app->user->identity['experience']; ?> года<br/>
    Рост: <?= Yii::$app->user->identity['growth']; ?><br/>
    Вес: <?= Yii::$app->user->identity['weight']; ?><br/>
    Прочитанные книги: <?php foreach ($books as $books): ?>
        <?= $books['name']; ?> |
    <?php endforeach; ?><br/>
</div>

