<?php
    $this->title = 'Элементы воркаута';

    use yii\helpers\Html;
    use yii\helpers\Url;
?>

<section class="elements">
    <div class="container-fluid">
        <div class="col-md-3 col-md-offset-1">
            <a href="<?= Url::to('/elements/1lvl') ?>">
                <span class="element-block">
                    <h3>Элементы 1 уровня</h3>
                    <?= Html::img("@web/images/elements/1lvl.jpg", ['alt' => '1 lvl', 'height' => '250px', 'width' => '280px']); ?>
                </span>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?= Url::to('/elements/2lvl') ?>">
                <span class="element-block">
                     <h3>Элементы 2 уровня</h3>
                    <?= Html::img("@web/images/elements/2lvl.jpg", ['alt' => '2 lvl', 'height' => '250px', 'width' => '280px']); ?>
                </span>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?= Url::to('/elements/3lvl') ?>">
            <span class="element-block">
                 <h3>Элементы 3 уровня</h3>
                <?= Html::img("@web/images/elements/3lvl.jpg", ['alt' => '3 lvl', 'height' => '250px', 'width' => '280px']); ?>
            </span>
            </a>
        </div>
    </div>
</section>
