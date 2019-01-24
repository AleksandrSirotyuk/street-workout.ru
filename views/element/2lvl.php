<?php
$this->title = 'Элементы воркаута (2 уровень)';

use yii\helpers\Html;
use yii\helpers\Url;
?>

<section class="elements">
    <div class="container-fluid">
        <?php
        if(!empty($element))
            foreach ($element as $element):
        ?>
            <div class="col-md-3">
                <span class="element-block">
                    <h3><?=$element['name']; ?></h3>
                    <?= Html::img("@web/images/elements/2lvl/{$element['image']}", ['alt' => '1 lvl', 'height' => '250px', 'width' => '280px']); ?>
                    <a data-id="<?=$element['id']?>" href="<?= Url::to(['/element/add', 'id' => $element['id']]) ?>" class="btn btn-success add_element">Добавить в изученное</a><br/>
                </span>
            </div>
        <?php endforeach; ?>
    </div>
</section>
