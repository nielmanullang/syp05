<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'item_name')->dropDownList([ 'administrator' => 'Administrator', 'staff' => 'Staff', 'member' => 'Member'], ['prompt' => '']) ?>

    <?=$form->field($model, 'user_id')->dropDownList(\yii\helpers\ArrayHelper::map(common\models\Pengguna::find()->asArray()->all(), 'id', 'username'), ['prompt'=>'-Select Name-']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Edit', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>