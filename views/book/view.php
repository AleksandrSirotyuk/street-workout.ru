<?php

$this->title = $book['name'];
$this->registerMetaTag(['name' => 'keywords', 'content' => $book['name']]);

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<section class="book">
    <div class="container-fluid">
        <?php if(!empty($book)): ?>
                <div class="col-md-3 col-md-offset-2">
                        <span class="book-block">
                            <?= Html::img("@web/images/books/{$book['image']}", ['alt' => $book['name'], 'height' => '180px', 'width' => '140px']); ?>
                            <h4><?=$book['name']  ?></h4>
                            Автор: <br/>
                            <?= $book['author']; ?> <br/>
                            Описание: <br/>
                            <?= $book['description']; ?> <br/>
                            <a href="<?= Url::to(['book/add', 'id' => $book['id']]) ?>" class="btn btn-success">Добавить в прочитанное</a><br/>
                            Оценить: <a href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 1]) ?>">☆</a>
                            <a href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 2]) ?>">☆</a>
                            <a href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 3]) ?>">☆</a>
                            <a href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 4]) ?>">☆</a>
                            <a href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 5]) ?>">☆</a><br/>
                            Средняя оценка книги: <?= (int)$averageMark[0]['AVG(mark_book)']?>
                            <div>
                                 <h3 align="center">Отзыв</h3>
                                <?php
                                $form = ActiveForm::begin(['class' => 'form-horizontal', 'id' => 'authorization-form']);
                                ?>
                                <?= $form->field($commentForm, 'text')->textarea(); ?>
                                <div>
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </div>
                                <?php
                                ActiveForm::end();
                                ?>
                            </div>
                        </span>
                </div>
            <div class="col-md-4 col-md-offset-2">
                <?php
                    if(!empty($commentBook))
                    foreach ($commentBook as $commentBook){
                        echo $commentBook['id_user'];
                        echo $commentBook['comment'];
                    }
                ?>
            </div>
            <?php endif; ?>
    </div>
</section>