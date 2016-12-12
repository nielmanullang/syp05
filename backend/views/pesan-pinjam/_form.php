<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PesanPinjam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesan-pinjam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pengguna')->textInput() ?>
    
    <?= $form->field($model, 'id_jenis')->textInput() ?>

    <?= $form->field($model, 'tgl_transaksi')->textInput() ?>

    <?= $form->field($model, 'jumlah_barang')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
