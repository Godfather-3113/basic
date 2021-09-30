<?php

/** @var $model \app\models\Article*/
?>

<div>
    <a href="<?= \yii\helpers\Url::to(['/article/view', 'slug'=>$model->slug])?>">
        <h3><?= \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?= \yii\helpers\StringHelper::truncateWords($model->getEncodeBody(), 49)?>
    </div>
    <p class="text-muted text-right">
        <smal>Created At: <b><?=  Yii::$app->formatter->asRelativeTime($model->created_at) ?></b></smal>

        By: <b><?= $model->createdBy->username ?></b>
    </p>
    <hr>
</div>


