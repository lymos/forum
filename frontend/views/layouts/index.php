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
	<div class="page-left">
		<ul class="nav nav-pills">
			<li class="active"><a href="#">资讯大全</a></li>
			<li><a href="#">自学成才</a></li>
			<li><a href="#">教学视频</a></li>
			<li><a href="#">资源下载</a></li>
			<li><a href="#">论坛</a></li>
		</ul>
	</div>
	<div class="page-left-col padd-top">
		<div class="col-sm-7">
			<div class="panel panel-info">
				<div class="panel-heading">
					最新资讯
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							<a href="#">好iahjhdshk很多事</a>
						</li>
						<li class="list-group-item">
							<a href="#">好iahjhdshk很多事</a>
						</li>
						<li class="list-group-item">
							<a href="#">好iahjhdshk很多事</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					热点文章
				</div>
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#">没时间是搜的时尚</a>
					</li>
					<li class="list-group-item">
						<a href="#">没时间是搜的时尚</a>
					</li>
					<li class="list-group-item">
						<a href="#">没时间是搜的时尚</a>
					</li>
				</ul>
			</div>	
		</div>
	</div>
		
	<div class="container">
		<?= $content // 页面中间的内容?>
	</div>
	<div  class="col-sm-11 page-left padd-top friend-link">
		<div class="panel panel-default">
			<div class="panel-heading">
				友情链接
			</div>
			<div class="panel-body">
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
				<a href="#" class="btn">HTML5中国</a>
			</div>
		</div>
	</div>
	<div class="col-sm-12 footer">
		<p>
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
		</p>
		<p>
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
		</p>
		<p>
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
			|
			<a href="#">关于我们</a>
		</p>
	</div>		
</div>
<?php $this->endBody(); ?>
</body>
<?php $this->endPage(); ?>
</html>

