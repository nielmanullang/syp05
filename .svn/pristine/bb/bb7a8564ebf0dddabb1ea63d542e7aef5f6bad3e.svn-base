<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetailBuku */

$this->title = $model->id_buku;
$this->params['breadcrumbs'][] = ['label' => 'Detail Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-buku-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_buku',
            'isbn',
            'klasifikasi',
            'lokasi',
            'cp_or',
            'tahun',
            'id_master_buku',
            'jenis',
            'status',
            'tgl_masuk',
            'availability',
        ],
    ]) ?>

</div>
