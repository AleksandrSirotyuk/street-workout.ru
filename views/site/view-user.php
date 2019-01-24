<?php
$this->title = $user['login'];
?>
<div class="container-fluid">
    <h2><?=$user['login'];?></h2>
    ФИО:
    <?=$user['last_name'];?>
    <?=$user['name'];?>
    <?=$user['patronymic'];?> <br/>
    Дата рождения:  <?=$user['date_birth'];?><br/>
    Стаж: <?=$user['experience'];?> года<br/>
    Рост: <?=$user['growth'];?><br/>
    Вес: <?=$user['weight'];?><br/>
</div>

