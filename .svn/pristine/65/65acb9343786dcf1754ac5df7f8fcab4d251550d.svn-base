<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailKaset */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-kaset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kaset')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp_or')->dropDownList([ 'Original' => 'Original', 'Copy' => 'Copy', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'id_master_kaset')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'tgl_masuk')->textInput() ?>

    <?= $form->field($model, 'sumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sifat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'availability')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
