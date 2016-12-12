<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailBuku */

$this->title = 'Update Detail Buku: ' . ' ' . $model->id_buku;
$this->params['breadcrumbs'][] = ['label' => 'Detail Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_buku, 'url' => ['view', 'id' => $model->id_buku]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-buku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
