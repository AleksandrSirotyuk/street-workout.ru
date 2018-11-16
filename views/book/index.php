<?php

$this->title = 'Книги для саморазвития';

use yii\helpers\Html;
use yii\helpers\Url;
?>

<section class="books">
    <div class="container-fluid">
        <?php
        if(!empty($book))
        foreach ($book as $book):
        ?>
            <div class="col-md-4">
                <a href="<?= Url::to(['book/view', 'id' => $book['id']]) ?>">
                        <span class="book-block">
                            <?= Html::img("@web/images/books/{$book['image']}", ['alt' => $book['name'], 'height' => '180px', 'width' => '140px']); ?>
                            <h4><?=$book['name']  ?></h4>
                        </span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>