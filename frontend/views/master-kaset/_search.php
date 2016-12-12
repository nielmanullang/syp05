<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MasterKasetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kaset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'judul') ?>


    <?php // echo $form->field($model, 'gambar') ?>

    <?php // echo $form->field($model, 'subjek') ?>

    <?php // echo $form->field($model, 'prodi_pemilik') ?>

    <div class="form-group">
        <?= Html::submitButton('Cari', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Ulang', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
