<?php
?>


<div class="col-lg-12">
    <h2><?=$model->title?><span class="badge"><?=$model->author->username?></span></h2>
    <?=$model->text?>
    <?= \yii\bootstrap\Html::a('подробнее', ['blog/one', 'url'=>$model->url],['class'=>'btn btn-success']) ?>
</div>
