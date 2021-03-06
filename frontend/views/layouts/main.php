<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=\yii\helpers\Url::to(["../canvas/images/gerb.png"], true)?>"  rel="icon">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body  data-spy="scroll" data-target=".side-nav-menu" data-offset="90">

<!-- <div id="preloader"></div> -->


<?php $this->beginBody() ?>

    <?php
        echo $this->render('header/_header');
        if (Yii::$app->controller->id != 'site'){echo $this->render('header/_news_header');}
    ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    <?php echo $this->render('footer/_footer'); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
