<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PeminjamanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tgl_kembali') ?>

    <?= $form->field($model, 'rencana_kembali') ?>

    <?= $form->field($model, 'id_trans_peminjaman') ?>

    <?= $form->field($model, 'id_referensi_kategori') ?>

    <?php // echo $form->field($model, 'id_d_buku') ?>

    <?php // echo $form->field($model, 'id_d_kaset') ?>

    <?php // echo $form->field($model, 'acc1') ?>

    <?php // echo $form->field($model, 'acc2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
