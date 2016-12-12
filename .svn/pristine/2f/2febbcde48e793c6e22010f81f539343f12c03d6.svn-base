<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>Please fill out the following fields to register:</p>

	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
				<?= $form->field($model, 'username') ?>
				<?= $form->field($model, 'password')->passwordInput()  ?>
				<?= $form->field($model, 'email') ?>
				<?= $form->field($model, 'batas_buku') ?>
				<?= $form->field($model, 'status') ?>
				<?= $form->field($model, 'NI') ?>
				<?= $form->field($model, 'nama') ?>
				<?= $form->field($model, 'alamat')?>
				<?= $form->field($model, 'no_hp')?>
				<?= $form->field($model, 'jabatan')?>
    			<?= $form->field($model, 'jurusan')->dropDownList([ 'D3 Teknik Informatika' => 'D3 Teknik Informatika', 'D3 Teknik Komputer' => 'D3 Teknik Komputer', 'D4 Teknik Informatika' => 'D4 Teknik Informatika', 'S1 Teknik Informatika' => 'S1 Teknik Informatika', 'S1 Sistem Informasi' => 'S1 Sistem Informasi', 'S1 Teknik Elektro' => 'S1 Teknik Elektro', 'S1 Teknik Bio.Proses' => 'S1 Teknik Bio.Proses', 'S1 Teknik Manajemen Rekayasa' => 'S1 Teknik Manajemen Rekayasa', ], ['prompt' => '']) ?>

			<div class="form-group">
				<?= Html::submitButton('Register', ['class' => 'btn btnprimary', 'name' => 'signup-button']) ?>
			</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>