<?php
/**
* admin.php template
*
**/
//use Yii;
use backend\assets\AppAsset;
use yii\helpers\Html;	// html class

AppAsset::register($this);	// import js css and so on
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language; ?>">
<head>
	<meta charset="<?php echo Yii::$app->charset; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->head(); ?>  <!-- 引进头部js css 资源 -->
</head>
<body>
<?php $this->beginBody(); ?>
<div class="col-sm-12">
<div class="header">
	<div class="logo">
	</div>
	<div class="title">
		<h1><?= Html::encode($this->title) ?></h1>
	</div>
	<div class="dropdown account">
		<button class="btn btn-default dorpdown-toggle" type="botton" data-toggle="dropdown" 
			aria-haspopup="true" aria-expanded="true">
			账号
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#">修改密码</a></li>
			<li><a href="#">退出</a></li>
		</ul>
	</div>
	
</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-2 left">
		<div id="accordion">
			<div class="list-group">
				<a class="list-group-item active menu-group" href="#collapse1" data-toggle="collapse" data-parent="#accordion">
					系统管理
				</a>
				<ul class="list-group collapse" id="collapse1">
					<li class="list-group-item menu-item" c="menu" v="menu">菜单管理</li>
				</ul>
			</div>
			<div class="list-group">
				<a class="list-group-item active menu-group" href="#collapse2" data-toggle="collapse" data-parent="#accordion">
					会员管理
				</a>
				<ul class="list-group collapse" id="collapse2">
					<li class="list-group-item menu-item">添加菜单</li>
					<li class="list-group-item menu-item">添加菜单</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-sm-10 right">
		<div class="nav-list" role="navgation">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">添加菜单</a></li>
				<li role="presentation"><a href="#">会员管理</a></li>
			</ul>
		</div>
		<div class="col-sm-10 content">
			<div class="row action">
				<div class="col-lg-6">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-add-id">新建</button>
						<button type="button" class="btn btn-default">删除</button>
						<button type="button" class="btn btn-default">导出</button>
					</div>
				</div>
				<div class="col-lg-6 form-inline">
					<div class="form-group">
						<label>关键字</label>
						<input type="text" class="form-control">
						<button class="btn btn-default">搜索</button>
						<button class="btn btn-default">高级搜索</button>
					</div>
				</div>
			</div>
			<div class="row modal-boxes">
				<div class="modal" id="modal-add-id" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
								<h4 class="modal-title">菜单添加</h4>
							</div>
							<form class="form-horizontal">
								<div class="modal-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">上级分类</label>
										<div class="col-sm-6">
											<select class="form-control" name="category">
												<option value="">请选择一项</option>
												<option value="1">系统设置</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">名称：</label>
										<div class="col-sm-6">
											<input class="form-control"  type="text" name="name">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">备注：</label>
										<div class="col-sm-6">
											<textarea class="form-control" rows="3" name="name"></textarea>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
									<button type="button" class="btn btn-primary">添加</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal" id="modal-update-id" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
								<h4 class="modal-title">菜单编辑</h4>
							</div>
							<form class="form-horizontal">
								<div class="modal-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">上级分类</label>
										<div class="col-sm-6">
											<select class="form-control" name="category">
												<option value="">请选择一项</option>
												<option value="1">系统设置</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">名称：</label>
										<div class="col-sm-6">
											<input class="form-control"  type="text" name="name">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">备注：</label>
										<div class="col-sm-6">
											<textarea class="form-control" rows="3" name="name"></textarea>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
									<button type="button" class="btn btn-primary">添加</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 action">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th><input type="checkbox" name="checkbox"></th>
								<th>账号</th>
								<th>密码</th>
								<th>手机</th>
								<th>添加日期</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" name="id[]"></td>
								<td>admin</td>
								<td>123456</td>
								<td>18909890786</td>
								<td>2015-04-12 12:13:56</td>
								<td><a data-target="#modal-update-id" data-toggle="modal" href="#">编辑</a>&nbsp;&nbsp;<a href="#">删除</a></td>
							</tr>
						</tbody>
					</table>
					<nav>
						<ul class="pagination">
							<li><a href="#"><span>&laquo;</span></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#"><span>&raquo;</span></a></li>
						</ul>
					</nav>		
				</div>
			</div>
		</div>
	</div>
</div>


<?php $this->endBody(); ?>

</body>
</html>
<?php $this->endPage(); ?>

