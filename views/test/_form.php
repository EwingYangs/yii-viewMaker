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

    <?= $form->field($model, 'username')->textInput(['style'=> 'width:30%','class' => "layui-input"]) ?>

    <?= $form->field($model, 'logo')->fileInput(['class' => "layui-upload-file"]) ?>

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

    <?= $form->field($model, 'area')->dropDownList(['广东' => '广东' , '江苏'=> '江苏'], ['prompt'=>'请选择']) ?>

    <?= $form->field($model, 'age')->textInput(['style'=> 'width:30%','class' => "layui-input"]) ?>

    <?= $form->field($model, 'hobby')->textInput(['style'=> 'width:30%','class' => "layui-input"]) ?>

    <?= $form->field($model, 'decr')->textarea() ?>


    <div class="modal-footer">
                <button type="button" class="layui-btn layui-btn-danger" data-dismiss="modal">关闭</button>

        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'layui-btn' : 'layui-btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php $this->beginBlock("servicea") ?>

    layui.use('layedit', function(){
      var layedit = layui.layedit;
      layedit.build('test-decr', {
        height: 180, //设置编辑器高度
        width: 70, //设置编辑器宽度(百分比)
      });
    });

    var options = {
      url: '<?=Yii::$app->urlManager->createUrl('test/uploadfile')?>',
      success: function(res){
        //返回服务器图片路径
        if(res.msg == 'success'){
            $('input[name="Test[logo]"][type="hidden"]').val(res.url);
            $('.upload_img').attr('src','/'+res.url);
            $('.upload_img_div').removeClass('hidden');
            layer.msg('上传成功');
        }else{
            layer.msg('上传失败'+res);
        }
      }
    }

    layui.use('upload', function(){
        $("#test-logo").prepend('<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">');
        $("#test-logo").parent().before('<div class="upload_img_div <?php echo !$model->isNewRecord && $model->logo ? '' : 'hidden';?>"><img src="<?php echo !$model->isNewRecord && $model->logo ? $model->logo : ''?>" class="upload_img"></div>');
        layui.upload(options);
    });

    layui.use('form', function(){
        var form = layui.form();
        form.render("select"); //更新全部
        $('.modal-body').find('.layui-form-select').parent().attr('style' , 'display:flex');
        form.render("radio"); //更新全部
    });


<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks["servicea"], \yii\web\View::POS_END); ?>
