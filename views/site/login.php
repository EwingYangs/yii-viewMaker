<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::cssFile('css/layui/register-login.css')?>

<div id="box"></div>
<div class="cent-box">
    <div class="cent-box-header">
        <h1 class="main-title">Yii-viewMake</h1>
        <h2 class="sub-title"> 后台管理系统</h2>
    </div>
    <div class="cont-main clearfix">
        <?php $form = ActiveForm::begin(
        [
                'options'=>['class'=>'login form'],
                'action' => 'index.php',
                'method' => 'post',
            ]
        ); ?>

        <div class="group">

            <div class="group-ipt email">
            <?= $form->field($model, 'username')->textInput(['id'=> 'email' , 'placeholder'=> '帐号同密码 test123456', 'class' => 'ipt'])->label(false) ?>
            </div>

            <div class="group-ipt password">
            <?= $form->field($model, 'password')->textInput(['id'=> 'password' , 'placeholder'=> '输入您的登录密码', 'class' => 'ipt'])->label(false) ?>
            </div>

        </div>

        <div class="button">
        <?= Html::submitButton('登录', ['id' => 'embed-submit' , 'class' => 'login-btn register-btn button']) ?>
        </div>
        <?php ActiveForm::end(); ?>

        <div class="remember clearfix">
            <label class="remember-me"><a href="#">QQ登录</a></label>
            <label class="forgot-password">
                <a href="#">忘记密码？</a>
            </label>
        </div>
    </div>
</div>

<div class="footer">
    <p>© 2017 <a href="https://www.calm7.com">static7 personal blog </a></p>
</div>

<?=Html::jsFile('layui/layui.js')?>
<?=Html::jsFile('js/layui/particles.js')?>
<?=Html::jsFile('js/layui/background.js')?>




