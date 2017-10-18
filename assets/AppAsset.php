<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'layui/css/layui.css',
        'css/layui/site.css',
    ];
    public $js = [
        'layui/layui_old.js',
        'layui/js/magic.js',
        'layui/lay/modules/layer.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
