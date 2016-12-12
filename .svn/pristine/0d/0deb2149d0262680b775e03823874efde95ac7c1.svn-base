<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailKasetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-kaset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kaset') ?>

    <?= $form->field($model, 'cp_or') ?>

    <?= $form->field($model, 'id_master_kaset') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'tgl_masuk') ?>

    <?php // echo $form->field($model, 'sumber') ?>

    <?php // echo $form->field($model, 'lokasi') ?>

    <?php // echo $form->field($model, 'klasifikasi') ?>

    <?php // echo $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'isbn') ?>

    <?php // echo $form->field($model, 'sifat') ?>

    <?php // echo $form->field($model, 'availability') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
