<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailKaset */

$this->title = 'Update Detail Kaset: ' . ' ' . $model->id_kaset;
$this->params['breadcrumbs'][] = ['label' => 'Detail Kasets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kaset, 'url' => ['view', 'id' => $model->id_kaset]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-kaset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
