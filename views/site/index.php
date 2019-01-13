<?php

use yii\helpers\Html;

$this->title = '图书列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<table class="table">
    <thead>
        <tr>
            <th>序号</th>
            <th>id</th>
            <th>书名</th>
            <th>作者</th>
            <th>序列号</th>
            <th>出版社</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($model as $book) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $book['id'] ?></td>
                <td><?= $book['name'] ?></td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['sn'] ?></td>
                <td><?= $book['publishCompany'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
