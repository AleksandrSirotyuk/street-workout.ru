<?php
    $this->title = 'Личный кабинет';

    use yii\bootstrap\Modal;
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
    Прочитанные книги: <a href="#" onclick="return getBooks();">открыть список</a><br/>
    Изученные элементы: <a href="#" onclick="return getElements();">открыть список</a><br/>
</div>
<?php
    Modal::begin([
        'header' => '<h2>Прочитанные книги</h2>',
        'footer' => '<button type="button" data-dismiss="modal" class="btn btn-success"> Закрыть </button>',
        'id' => 'modal-books',
    ]);
    Modal::end();

    Modal::begin([
        'header' => '<h2>Изученные элементы</h2>',
        'footer' => '<button type="button" data-dismiss="modal" class="btn btn-success"> Закрыть </button>',
        'id' => 'modal-elements',
    ]);
    Modal::end();
?>


