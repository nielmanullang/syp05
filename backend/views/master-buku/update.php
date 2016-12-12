<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MasterBuku */

$this->title = 'Edit Buku: ' . ' ' . $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="buku-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
