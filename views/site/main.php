<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/4
 * Time: 9:20
 */
use backend\assets\AppAsset;
use yii\helpers\Html;

?>
<?=Html::cssFile('css/main.css')?>
<section class="larry-wrapper">
    <!-- overview -->
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol userblue"> <i class="iconpx-users"></i>
                </div>
                <div class="value">
                    <a href="#">
                        <h1 id="count1">11</h1>
                    </a>
                    <p>用户总量</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol commred"> <i class="iconpx-user-add"></i>
                </div>
                <div class="value">
                    <a href="#">
                        <h1 id="count2">11</h1>
                    </a>
                    <p>今日注册用户</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol articlegreen">
                    <i class="iconpx-file-word-o"></i>
                </div>
                <div class="value">
                    <a href="#">
                        <h1 id="count3">11</h1>
                    </a>
                    <p>订单总数</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol rsswet">
                    <i class="iconpx-check-circle"></i>
                </div>
                <div class="value">
                    <a href="#">
                        <h1 id="count4">0</h1>
                    </a>
                    <p>待确认订单数</p>
                </div>
            </section>
        </div>
    </div>
    <!-- overview end -->
    <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading bm0">
                    <span class='span-title'>应用概览</span>
                    <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                </header>
                <div class="panel-body" >
                    <table class="table table-hover personal-task">
                        <tbody>
                        <tr>
                            <td>
                                <strong>版本信息</strong>： 版本名称：<a href="http://www.bmob.cn">Bmob</a> 版本号: V01_UTF8_0.10

                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>开发作者</strong>： Magic

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>网站域名</strong>：未定义
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>网站目录</strong>：未定义
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>服务器IP</strong>：未定义
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>服务器环境</strong>：未定义
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>数据库版本</strong>： 未定义

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>最大上传限制</strong>： 未定义

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>当前登录用户</strong>： <span class="current_user">未定义</span>

                            </td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
        <div class="col-lg-6">

        </div>
    </div>

</section>



<?php $this->beginBlock('service') ?>

layui.use(['jquery','layer','element'],function(){
window.jQuery = window.$ = layui.jquery;
window.layer = layui.layer;
window.element = layui.element();

$('.panel .tools .iconpx-chevron-down').click(function(){
var el = $(this).parents(".panel").children(".panel-body");
if($(this).hasClass("iconpx-chevron-down")){
$(this).removeClass("iconpx-chevron-down").addClass("iconpx-chevron-up");
el.slideUp(200);
}else{
$(this).removeClass("iconpx-chevron-up").addClass("iconpx-chevron-down");
el.slideDown(200);
}
})

});
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['service'], \yii\web\View::POS_END); ?>
<?php
$this->registerJsFile('layui/jsplug/echarts.min.js', ['depends' => 'yii\web\YiiAsset', 'position' => \yii\web\View::POS_END]);
$this->registerJsFile('layui/js/main.js', ['depends' => 'yii\web\YiiAsset', 'position' => \yii\web\View::POS_END]);
?>
