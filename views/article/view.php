<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p class="text-muted">
        <smal>Created At: <b><?=  Yii::$app->formatter->asRelativeTime($model->created_at) ?></b></smal>

        By: <b><?= $model->createdBy->username ?></b>
    </p>

    <?php  if (!Yii::$app->user->isGuest):  ?>
        <p>
            <?= Html::a('Update', ['update', 'slug' => $model->slug], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'slug' => $model->slug], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif; ?>


    <div>
        <?= $model->getEncodeBody()?>
    </div>

</div>
