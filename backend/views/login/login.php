<?php
/**
* admin login page
*/
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Welcome To Login Admin';

?>
<div class="admin-login">
	<div class="row">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6">
			<h2 class="login-title">
				<?= Html::encode($this->title) ?>
			</h2>
			<?php $form = ActiveForm::begin(['id' => 'form-login', 'layout' => 'horizontal', 'action' => 'index.php?r=login/login']); ?>
				<?= $form->field($model, 'username') ?>
				<?= $form->field($model, 'password')->passwordInput()  ?>
				<?= $form->field($model, 'captcha')->widget(yii\captcha\Captcha::className(), ['captchaAction' => 'login/captcha']) ?>
				<?= $form->field($model, 'rememberme')->checkbox() ?>
				<div class="form-group">
					<label class="col-sm-offset-4"></label>
					<?= Html::submitButton('登录', ['class' => 'btn btn-primary btn-lg', 'name' => 'btn-login']); ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
		<div class="col-lg-3">
		</div>
</div>
