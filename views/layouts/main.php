<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\FBFWidget;
use app\components\FBFWidget2;
use app\components\FBFWidget3;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<html>
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<link rel="shortcut icon" href="<?php echo Yii::$app->getHomeUrl(); ?>/favicon.ico" type="image/x-icon" />
    <?php $this->head() ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
  <?php $this->beginBody() ?>
    <div class="zz-loader"></div>

	<div id="page">
	<?= $content?>			
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	

	

	<?= FBFWidget3::widget([]) ?>
    <?= FBFWidget::widget([]) ?>
	<?= FBFWidget2::widget([]) ?>

	<?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>