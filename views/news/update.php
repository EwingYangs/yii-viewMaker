<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BmNews */

$this->title = 'Update Bm News: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bm News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bm-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
