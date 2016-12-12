<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PesanPinjamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesan-pinjam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tgl_transaksi') ?>

    <?= $form->field($model, 'jumlah_barang') ?>

    <?= $form->field($model, 'id_jenis') ?>

    <?= $form->field($model, 'id_pengguna') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
