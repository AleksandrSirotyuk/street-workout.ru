<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
?>

<table width="100%">
    <?php
    $count = 0;
    if(!empty($books))
        for($i=0; $i<count($books); $i++):
            $count++;
            ?>
            <?php if (($count%4==0) || ($i==0)):?>
                <tr>
            <?php endif; ?>
                    <td>
                        <div class="book-modal-block">
                            <a href="<?= Url::to(['/book/view', 'id' => $books[$i]['id']]) ?>">
                                        <span class="book-block">
                                            <?= Html::img("@web/images/books/{$books[$i]['image']}", ['alt' => $books[$i]['name'], 'height' => '90px', 'width' => '70px']); ?>
                                        </span>
                            </a>
                            <h4>
                                <a href="<?= Url::to(['/book/view', 'id' => $books[$i]['id']]) ?>"><?=$books[$i]['name']  ?></a>
                                <i data-id="<?= $books[$i]['id'] ?>" class="fa fa-times delete-book" aria-hidden="true"></i>
                            </h4>
                        </div>
                    </td>
                <?php
                    if (($count%6==0) || ($i==2)):
                ?>
                </tr>
            <?php endif; ?>
    <?php endfor; ?>
</table>
