<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MasterBuku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'edisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penerbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_buku')->textInput() ?>

    <?= $form->field($model, 'bahasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subjek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topik')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
