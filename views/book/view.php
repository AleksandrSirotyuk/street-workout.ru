<?php

$this->title = $book['name'];
$this->registerMetaTag(['name' => 'keywords', 'content' => $book['name']]);

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<section class="book">
    <div class="container-fluid">
        <div class="row">
            <?php if(!empty($book)): ?>
                    <div class="col-md-2 col-md-offset-2">
                        <?= Html::img("@web/images/books/{$book['image']}", ['alt' => $book['name'], 'height' => '180px', 'width' => '140px', 'id' => 'img-book']); ?>
                    </div>
                     <div class="col-md-4">
                        <span class="book-block">
                            <span class="headers_3"><?=$book['name']  ?></span> <br/>
                                <span class="headers_4">Автор:</span>
                                <?= $book['author']; ?> <br/>
                                <span class="headers_4">Описание:</span> <br/>
                                <?= $book['description']; ?> <br/>
                                <?php if(!Yii::$app->user->isGuest): ?>
                                    <span class="headers_4">Оценить: </span>
                                    <a class="rate_book" data-id="<?=$book['id']?>" data-mark="1" href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 1]) ?>">☆</a>
                                    <a class="rate_book" data-id="<?=$book['id']?>" data-mark="2" href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 2]) ?>">☆</a>
                                    <a class="rate_book" data-id="<?=$book['id']?>" data-mark="3" href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 3]) ?>">☆</a>
                                    <a class="rate_book" data-id="<?=$book['id']?>" data-mark="4" href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 4]) ?>">☆</a>
                                    <a class="rate_book" data-id="<?=$book['id']?>" data-mark="5" href="<?= Url::to(['book/rate', 'id' => $book['id'], 'mark' => 5]) ?>">☆</a><br/>
                                <?php endif; ?>
                                <span class="headers_4">Средняя оценка книги:</span> <?= (int)$averageMark[0]['AVG(mark_book)']?>
                            </span>
                     </div>

            <div class="col-md-4">
                <span class="headers_3">Отзывы:</span> <br/>
                <?php
                if(!empty($commentBook))
                    foreach ($commentBook as $commentBook){
                        echo '<span class="headers">'.$commentBook['login'].'</span>'.' : ';
                        echo $commentBook['comment'].'<br/>';
                    }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-offset-2">
                                <?php if(!Yii::$app->user->isGuest): ?>
                                    <div>
                                        <span class="headers_3">Написать отзыв:</span>
                                        <?php
                                            $form = ActiveForm::begin(['class' => 'form-horizontal', 'id' => 'comment-form']);
                                        ?>
                                        <?= $form->field($commentForm, 'text')->textarea(); ?>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Отправить</button>
                                            <a data-id="<?=$book['id']?>" href="<?= Url::to(['/book/add', 'id' => $book['id']]) ?>" class="btn btn-success add_book">Добавить в прочитанное</a><br/>
                                        </div>
                                        <?php
                                            ActiveForm::end();
                                        ?>
                                    </div>
                                <?php endif; ?>
            </div>
        </div>
    </div>
            <?php endif; ?>

</section>