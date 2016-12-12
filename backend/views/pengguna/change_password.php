<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Account */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Ganti Password';
$this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="change-passsword">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($user, 'currentPassword')->passwordInput(['maxlength' => true]) ?>
    <?= $form->field($user, 'newPassword')->passwordInput(['maxlength' => true]) ?>
    <?= $form->field($user, 'newPasswordConfirm')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
