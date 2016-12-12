<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_status') ?>

    <?= $form->field($model, 'tgl_ganti_status') ?>

    <?= $form->field($model, 'id_referensi_kategori') ?>

    <?= $form->field($model, 'id_trans_pemesanan') ?>

    <?php // echo $form->field($model, 'id_d_buku') ?>

    <?php // echo $form->field($model, 'id_d_kaset') ?>

    <?php // echo $form->field($model, 'tgl_pemeritahuan') ?>

    <?php // echo $form->field($model, 'acc1') ?>

    <?php // echo $form->field($model, 'acc2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
