<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailArtikel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-artikel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_artikel')->textInput() ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
