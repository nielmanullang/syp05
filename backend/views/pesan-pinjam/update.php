<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PesanPinjam */

$this->title = 'Update Pesan Pinjam: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pesan Pinjams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pesan-pinjam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
