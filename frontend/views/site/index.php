<?php

/* @var $this yii\web\View */

$this->title = 'Блог';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Доброе пожаловать!</h1>
        <p class="lead">Читайте наш блог!</p>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($blogs as $one):?>
            <div class="col-lg-4">
                <h2><?=$one->title?></h2>
                <?=$one->text?>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
