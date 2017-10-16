<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BmNews */

$this->title = 'Create Bm News';
$this->params['breadcrumbs'][] = ['label' => 'Bm News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bm-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
