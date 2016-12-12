<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetailBuku */

$this->title = $model->id_buku;
$this->params['breadcrumbs'][] = ['label' => 'Detail Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-buku-view">

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id_buku], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_buku], [
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
            'id_buku',
            'isbn',
            'klasifikasi',
            'lokasi',
            'cp_or',
            'tahun',
            // 'id_master_buku',
            // 'jenis',
            // 'status',
            'tgl_masuk',
            // 'availability',
        ],
    ]) ?>

</div>
