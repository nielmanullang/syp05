<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailDenda */

$this->title = 'Update Detail Denda: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Detail Dendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-denda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
