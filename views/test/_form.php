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

    <?= $form->field($model, 'tel')->dropDownList(['0' => '0' , '1'=> '1'], ['prompt'=>'请选择','style'=> "width:50%"]) ?>

    <?= $form->field($model, 'username')->textInput(['style'=> 'width:30%','class' => "layui-input"]) ?>

    <?= $form->field($model, 'tel')->textInput(['style'=> 'width:30%','class' => "layui-input"]) ?>

    <?= $form->field($model, 'sex')->radioList(['1'=>'女','0'=>'男'],
        [
            'item' => function($index, $label, $name, $checked, $value)
            {
                $checked=$checked?"checked":"";
                $return = '';
                $return .= '<input type="radio" title="'.$label.'" id="' . $name . $value . '" name="' . $name . '" value="' . $value . '"  '.$checked.'>';
                $return .= '';
                return $return;
            }
        ]
    ) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true,'style'=> 'width:30%','class' => "layui-input"]) ?>

    <?= $form->field($model, 'hobby')->textInput(['style'=> 'width:30%','class' => "layui-input"]) ?>

    <?= $form->field($model, 'decr')->textInput(['style'=> 'width:30%','class' => "layui-input"]) ?>

    <div class="modal-footer">
                <button type="button" class="layui-btn layui-btn-danger" data-dismiss="modal">关闭</button>

        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'layui-btn' : 'layui-btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php $this->beginBlock("servicea") ?>
layui.use('form', function(){
        var form = layui.form();
        form.render("select"); //更新全部
        $('.layui-form-select').parent().attr('style' , 'display:flex');
        form.render("radio"); //更新全部
    });
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks["servicea"], \yii\web\View::POS_END); ?>
