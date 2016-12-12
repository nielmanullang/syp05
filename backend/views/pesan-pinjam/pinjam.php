<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
use yii\grid\GridView;

$this->title = 'Peminjaman Bahan Pustaka';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-pinjam-form">

<!--    <p>
        <?= Html::a('Export Rating Buku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_bahan_pustaka')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Pinjam', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>   