<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset :: register($this);//注册基本样式和js

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<!-- 信息提示 -->
<?php
if( Yii::$app->getSession()->hasFlash('success') ) {
    $msg = Yii::$app->getSession()->getFlash('success');
?>

    <?php
    $this->beginBlock('service') ?>
        layer.msg("<?=$msg?>", {icon: 1, anim: 6, time: 2500});
    <?php $this->endBlock() ?>
    <?php $this->registerJs($this->blocks['service'], \yii\web\View::POS_END);
    ?>
    <?php
}?>


<?php
if( Yii::$app->getSession()->hasFlash('error') ) {
    $msg = Yii::$app->getSession()->getFlash('error');
?>
    <?php
    $this->beginBlock('service') ?>
        layer.msg("<?=$msg?>", {icon: 2, anim: 6, time: 2500});
    <?php $this->endBlock() ?>
    <?php $this->registerJs($this->blocks['service'], \yii\web\View::POS_END);
    ?>
    <?php
}?>


<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
