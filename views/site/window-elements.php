<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<table width="100%">
    <?php
    $count = 0;
    if(!empty($elements))
        for($i=0; $i<count($elements); $i++):
            $count++;
            ?>
            <?php if (($count%4==0) || ($i==0)):?>
            <tr>
        <?php endif; ?>
            <td>
                <div class="element-modal-block">
                    <span class="element-window">
                        <?= Html::img("@web/images/elements/{$elements[$i]['level']}lvl/{$elements[$i]['image']}", ['alt' => $elements[$i]['name'], 'height' => '90px', 'width' => '70px']); ?>
                    </span>
                    <h4>
                        <?=$elements[$i]['name']  ?>
                        <i data-id="<?= $elements[$i]['id'] ?>" class="fa fa-times delete-element" aria-hidden="true"></i>
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
