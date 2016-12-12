<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PesanPinjam */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pesan Pinjams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-pinjam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tgl_transaksi',
            'jumlah_barang',
            'id_jenis',
            'id_pengguna',
        ],
    ]) ?>

</div>
