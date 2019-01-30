<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-search">
<blockquote class="layui-elem-quote">
<div class="layui-form custom">
    <?php $form = ActiveForm::begin([
        'options'=>['class'=>'layui-form',  'style' => 'display: flex;'],
        'fieldConfig'=>['options'=>['class'=>'layui-form-item'],
        'labelOptions'=>['class'=>'layui-form-label']],
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true , 'class' => 'layui-input' , 'placeholder' => 'ID'])->label(false) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true , 'class' => 'layui-input' , 'placeholder' => '用户名'])->label(false) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true , 'class' => 'layui-input' , 'placeholder' => '电话号码'])->label(false) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true , 'class' => 'layui-input' , 'placeholder' => '年龄'])->label(false) ?>

    <?= $form->field($model, 'hobby')->textInput(['maxlength' => true , 'class' => 'layui-input' , 'placeholder' => '爱好'])->label(false) ?>

    <?= $form->field($model, 'area')->dropDownList(['广东' => '广东' , '江苏'=> '江苏'], ['prompt'=>'请选择','style'=> "width:50%"])->label(false) ?>

    <?php // echo $form->field($model, 'decr')->textInput(['maxlength' => true , 'class' => 'layui-input' , 'placeholder' => '简介'])->label(false) ?>

    <?= Html::submitButton('搜索', ['class' => 'layui-btn layui-btn-warning']) ?>

    <?php ActiveForm::end(); ?>
</div>
</blockquote>
</div>
