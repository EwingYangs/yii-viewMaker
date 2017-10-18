<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Test */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modal-body">

    <?php $form = ActiveForm::begin(
        [
            'id'=> $model->isNewRecord ? 'create-form' : 'update-form-' . $model->id,
            'options'=>['class'=>'layui-form'],
            'fieldConfig'=>[
                'options'=>['class'=>'layui-form-item'],
                'labelOptions'=>['class'=>'layui-form-label'],
            ],
        ]
    ); ?>

    <?= $form->field($model, 'username')->textInput(['style'=> 'width:50%']) ?>

    <?= $form->field($model, 'tel')->textInput(['style'=> 'width:50%']) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true,'style'=> 'width:50%']) ?>

    <?= $form->field($model, 'hobby')->textInput(['style'=> 'width:50%']) ?>

    <?= $form->field($model, 'decr')->textInput(['style'=> 'width:50%']) ?>

    <div class="modal-footer">
                <button type="button" class="layui-btn layui-btn-danger" data-dismiss="modal">关闭</button>

        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'layui-btn' : 'layui-btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
