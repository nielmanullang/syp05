<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_status')->textInput() ?>

    <?= $form->field($model, 'tgl_ganti_status')->textInput() ?>

    <?= $form->field($model, 'id_referensi_kategori')->textInput() ?>

    <?= $form->field($model, 'id_trans_pemesanan')->textInput() ?>

    <?= $form->field($model, 'id_d_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_d_kaset')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pemeritahuan')->textInput() ?>

    <?= $form->field($model, 'acc1')->textInput() ?>

    <?= $form->field($model, 'acc2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
