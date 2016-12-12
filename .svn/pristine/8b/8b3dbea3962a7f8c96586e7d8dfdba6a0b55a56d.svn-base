<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetailKaset */

$this->title = $model->id_kaset;
$this->params['breadcrumbs'][] = ['label' => 'Detail Kasets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-kaset-view">

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id_kaset], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_kaset], [
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
            'id_kaset',
            'cp_or',
            'id_master_kaset',
            'status',
            'tgl_masuk',
            'sumber',
            'lokasi',
            'klasifikasi',
            'jenis',
            'isbn',
            'sifat',
            'availability',
        ],
    ]) ?>

</div>
