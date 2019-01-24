<?php

$this->title = 'Соревнования';
use yii\helpers\Url;
use yii\widgets\Pjax;
?>
<?php Pjax::begin([
        'timeout' => 5000,
        'clientOptions' => ['method' => 'POST'],
        'enablePushState' => false,
]); ?>
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $('.competition-block').hide().animate({opacity: "show"}, 1000);-->
<!--    });-->
<!--</script>-->
<section class="competitions">
    <div class="container-fluid">
        <h3 align="center">Список соревнований | <a href="<?= Url::to(['/competitions/creating']) ?>">Создать соревнование</a></h3>
            <div class="competition-block">
                <table width="100%" cellpadding="5">
                   <tr>
                       <th>Город</th>
                       <th>Название</th>
                       <th>Создатель</th>
                       <th>Тип соревнования</th>
                       <th>Дата проведения</th>
                       <th>Возрастные ограничения</th>
                       <th></th>
                   </tr>
                    <?php
                    if(!empty($competitions))
                    foreach ($competitions as $competition):
                    ?>
                   <tr>
                       <td><?=$competition['city'];?></td>
                       <td><?=$competition['competition_name'];?></td>
                       <td><a href="<?= Url::to(['site/view-user', 'id' => $competition['id_creator']]) ?>"><?=$competition['login'];?></a></td>
                       <td><?=$competition['type_name'];?></td>
                       <td><?=$competition['date'];?></td>
                       <td>От <?=$competition['age_from'];?> до <?=$competition['age_to'];?> лет</td>
                       <td><button class="btn btn-success">Принять участие</button></td>
                  </tr>
                    <?php endforeach; ?>
                 </table>
            </div>
    </div>
</section>
<?php Pjax::end();?>