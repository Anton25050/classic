<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Имя</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Фамилия</label>: <?= Html::encode($model->lastname) ?></li>
    <li><label>Отчество</label>: <?= Html::encode($model->surname) ?></li>
    <li><label>Почта</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Телефон</label>: <?= Html::encode($model->numberPhone) ?></li>
</ul>