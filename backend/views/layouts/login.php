<?php
/**
* admin login
*/
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

AppAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta type="viewport" content"width=device-width; initial-scale=1">
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="wrap">
	<?php 
		NavBar::begin([
			'brandLabel' => 'Forum 后台登录',
			'brandUrl' => 'login.php',
			'options' => [
			]
		]);
		$menu_items = [
			[
				'label' => '前台首页', 
				'url' => 'index.php' 
			],
			[
				'label' => '联系系统管理员',
				'url' => 'admin.php'
			]
		];
		echo Nav::widget([
			'items' => $menu_items,
			'options' => ['class' => 'navbar-nav navbar-right']
		]);
	?>

	<?php NavBar::end(); ?>
	<div class="container">
		<?= $content // 显示view的内容?>		
	</div>
</div>

<footer class="footer">
	<div class="container">
		<p class="pull-left">&copy; Lymos Forum <?= date('Y') ?></p>
		<p class="pull-right"><?= Yii::powered() ?></p>
	</div>
</footer>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
