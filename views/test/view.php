<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Test */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
            class="sr-only">Close</span></button>
    <h4 class="modal-title"><?=$this->title?></h4>
</div>
<div class="test-view modal-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'tel',
            'age',
            'hobby',
            'decr',
        ],
    ]) ?>

</div>
<div class="modal-footer">
    <button type="button" class="layui-btn layui-btn-danger" data-dismiss="modal">关闭</button>
</div>
