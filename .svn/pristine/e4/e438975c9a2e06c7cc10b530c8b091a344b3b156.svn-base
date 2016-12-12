<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailBukuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-buku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_buku') ?>

    <?= $form->field($model, 'isbn') ?>

    <?= $form->field($model, 'klasifikasi') ?>

    <?= $form->field($model, 'lokasi') ?>

    <?= $form->field($model, 'cp_or') ?>

    <?php // echo $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'id_master_buku') ?>

    <?php // echo $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tgl_masuk') ?>

    <?php // echo $form->field($model, 'availability') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
