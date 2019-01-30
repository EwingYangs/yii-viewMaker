<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = '首页';

?>
<div class="layui-layout layui-layout-admin" id="layui_layout">
    <!-- 顶部区域 -->
    <div class="layui-header header header-demo">
        <div class="layui-main">
            <!-- logo区域 -->
            <div class="admin-logo-box">
                <a class="logo" href="" title="logo"><img src="images/logo.png" alt=""></a>
                <div class="larry-side-menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>
            <!-- 顶级菜单区域 -->
            <div class="layui-larry-menu hidden-xs">
                <ul class="layui-nav clearfix">
                    <li class="layui-nav-item">
                        <a href="http://www.yiichina.com/doc" target="blank"><i class="iconfont icon-xitongguanli"></i>Yii2文档</a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="index.php?r=gii" target="blank"><i class="iconfont icon-jiaoseguanli1"></i>Gii代码生成</a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="http://www.layui.com/doc/" target="blank"><i class="iconfont icon-ht_expand"></i>Layui框架文档</a>
                    </li>
                </ul>
            </div>
            <!-- 右侧导航 -->
            <ul class="layui-nav larry-header-item hidden-xs">
                <li class="layui-nav-item">
                    <a href="<?php echo Url::to(['/site/logout']);?>">
                        <i class="iconfont icon-exit"></i>
                        退出</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="h5s" style="height: 10px;">a</div>
    <!-- 左侧侧边导航开始 -->
    <div class="layui-side layui-side-bg layui-larry-side" id="larry-side">
        <div class="layui-side-scroll" id="larry-nav-side" lay-filter="side">
            <div class="user-photo">
                <a class="img" title="我的头像" >
                    <img src="images/user.jpg" class="userimg1"></a>
                <p>你好！admin, 欢迎登录</p>
            </div>
            <!-- 左侧菜单 -->
            <ul class="layui-nav layui-nav-tree">
                <li class="layui-nav-item layui-this">
                    <a href="javascript:;" data-url="<?php echo Url::to(['site/main']);?>">
                        <i class="iconfont icon-home1" data-icon='icon-home1'></i>
                        <span>后台首页</span>
                    </a>
                </li>

                <!-- 用户管理 -->
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <i class="iconfont icon-jiaoseguanli2" ></i>
                        <span>测试管理</span>
                        <em class="layui-nav-more"></em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="<?php echo Url::to(['test/index']);?>">
                                <i class="iconfont icon-yonghu1" data-icon='icon-yonghu1'></i>
                                <span>测试列表</span>
                            </a>
                        </dd>

                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <!-- 左侧侧边导航结束 -->
    <!-- 右侧主体内容 -->
    <div class="layui-body" id="larry-body" style="bottom: 0;border-left: solid 2px #1AA094;">
        <div class="layui-tab layui-tab-card larry-tab-box" id="larry-tab" lay-filter="demo" lay-allowclose="true">
            <ul class="layui-tab-title">
                <li class="layui-this" id="admin-home"><i class="iconfont icon-diannao1"></i><em>后台首页</em></li>
            </ul>
            <div class="layui-tab-content" style="min-height: 150px; ">
                <div class="layui-tab-item layui-show">
                    <iframe class="larry-iframe" data-id='0' src="<?php echo Url::to(['site/main']);?>"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- 底部区域 -->
    <div class="layui-footer layui-larry-foot" id="larry-footer">
        <div class="layui-mian">
            <div class="larry-footer-left">
                php技术交流 QQ群：453442221

            </div>
            <p class="p-admin">
                <span>2017 &copy;</span>
                Write by Ewing, 联系邮箱
                501978500@qq.com
            </p>
        </div>
    </div>
</div>






