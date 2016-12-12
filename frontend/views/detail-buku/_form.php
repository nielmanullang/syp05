<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailBuku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-buku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp_or')->dropDownList([ 'Original' => 'Original', 'Copy' => 'Copy', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_master_buku')->textInput() ?>

    <?= $form->field($model, 'jenis')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'tgl_masuk')->textInput() ?>

    <?= $form->field($model, 'availability')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
