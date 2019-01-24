<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Header with the top menu -->
<header>
    <nav class="top-menu">
        <div class="container-fluid">
            <ul class="top-menu">
                <li><?= Html::img('@web/images/logo.jpg', ['alt' => 'logo_workout', 'width' => '30%']); ?></li>
                <li><a href="<?= Url::home(); ?>">Главная</a></li>
                <li class="dropdown-standart"><a href="" class="dropdown">Соревнования</a>
                    <ul class="submenu-standart">
                        <li><a href="<?= Url::to(['/competition/index']) ?>">Список соревнований</a></li>
                        <li><a href="<?= Url::to(['/fights/upcoming-fights']) ?>">Workout - зарубы</a></li>
                        <li><a href="">Workout - челенджи</a></li>
                    </ul>
                </li>
                <li><a class="link_submenu" href="">Статьи</a>
                    <ul class="submenu">
                        <li><h3>Тренировки</h3>
                            <ul>
                                <li><a href="<?= Url::to(['/article/index']) ?>">Обучающие статьи</a></li>
                                <li><a href="">Программы тренировок</a></li>
                                <li><a href="<?= Url::to(['/elements']) ?>">Элементы воркаута</a></li>
                            </ul>
                        </li>
                        <li><h3>Спортивная жизнь</h3>
                            <ul>
                                <li><a href="">Интервью спортсменов</a></li>
                                <li><a href="">Здоровое питание</a></li>
                                <li><a href="<?= Url::to(['/book/index']) ?>">Книги для саморазвития</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>
                                    <!-- 			            	 <li><h3 class="image-header">Статьи</h3></li> -->
                                    <?= Html::img('@web/images/submenu.jpg', ['alt' => 'submenu_workout']); ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <li><a href="">Карта площадок</a>
                </li>
                <li><a href="">О проекте</a></li>
                <?php if(!Yii::$app->user->isGuest): ?>
                    <li class="dropdown-standart"><a href="" class="dropdown"><?=Yii::$app->user->identity['login']; ?></a>
                        <ul class="submenu-standart">
                            <li><a href="<?= Url::to(['/profile']) ?>">Личный кабинет</a></li>
                            <li><a href="<?= Url::to(['/profile/edit']) ?>">Редактировать профиль</a></li>
                            <li><a href="<?= Url::to(['/site/logout']) ?>">Выйти из системы</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="<?= Url::to(['/site/authorization']) ?>">Войти</a></li>
                <?php endif; ?>
                <li><a title="Поиск" href=""><i class="fa fa-search" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- End of header with the top menu -->

<?= $content; ?>

<!-- Footer -->
<footer>
    <div class="container-fluid">
        <div class="col-md-4">
            <h2>footer1</h2>
        </div>
        <div class="col-md-4">
            <h2>footer2</h2>
        </div>
        <div class="col-md-4">
            <h2>Разработчики</h2>
            <ul>
                <li>Веб-разработка: Александр Сиротюк</li>
            </ul>
        </div>
    </div>
</footer>
<!-- End of footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>