<?php

$this->title = 'Зарубы';
use yii\helpers\Url;
?>
<section class="fights">
    <div class="container-fluid">
        <h3 align="center">Список ближайших заруб| <a href="<?= Url::to(['/fights/completed-fights']) ?>">Недавно завершенные зарубы</a></h3>
        <div class="fight-block">
            <table width="100%" cellpadding="5">
                <tr>
                    <th>Идентификатор</th>
                    <th>Город</th>
                    <th>Дата проведения</th>
                    <th>Упражнения</th>
                    <th>Первый участик</th>
                    <th>Второй участник</th>
                </tr>
                <?php
                if(!empty($upcomingFights))
                    foreach ($upcomingFights as $upcomingFight):
                        ?>
                        <tr>
                            <td><?=$upcomingFight['id'];?></td>
                            <td><?=$upcomingFight['city'];?></td>
                            <td><?=$upcomingFight['date_fight'];?></td>
                            <td><?=$upcomingFight['id'];?></td>
                            <td><?=$upcomingFight['id'];?></td>
                            <td><?=$upcomingFight['id'];?></td>
                        </tr>
                    <?php print_r($upcomingFight) ?>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>
