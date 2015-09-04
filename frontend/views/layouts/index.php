<?php
/**
* 前台首页布局
*/
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;


AppAsset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta type="viewport" content="width=device-width, initial-scale=1">
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="wrap">
	<?php 
		NavBar::begin([
			'brandLabel' => 'Lymos Forum',
			'brandUrl' => 'index.php'
		]);
		$items = [
			['label' => '首页', 'url' => 'index.php'],
			['label' => '登录', 'url' => 'login.php'],
			['label' => '注册', 'url' => 'register.php'],
			['label' => '关于我们', 'url' => 'about.php']
		];
		echo Nav::widget([
			'items' => $items,
			'options' => ['class' => 'navbar-nav navbar-right']
		]);	
		NavBar::end();
	?>
	<div class="container">
		<?= $content // 页面中间的内容?>
	</div>
</div>
<?php $this->endBody(); ?>
</body>
<?php $this->endPage(); ?>
</html>

