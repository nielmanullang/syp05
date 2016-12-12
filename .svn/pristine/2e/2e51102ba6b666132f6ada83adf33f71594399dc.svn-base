<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MasterKaset */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kaset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jenis')->textInput() ?>

    <?= $form->field($model, 'gambar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subjek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prodi_pemilik')->dropDownList([ 'D3 Teknik Informatika' => 'D3 Teknik Informatika', 'D3 Teknik Komputer' => 'D3 Teknik Komputer', 'D4 Teknik Informatika' => 'D4 Teknik Informatika', 'S1 Teknik Informatika' => 'S1 Teknik Informatika', 'S1 Sistem Informasi' => 'S1 Sistem Informasi', 'S1 Teknik Elektro' => 'S1 Teknik Elektro', 'S1 Teknik Bio.Proses' => 'S1 Teknik Bio.Proses', 'S1 Teknik Manajemen Rekayasa' => 'S1 Teknik Manajemen Rekayasa', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
