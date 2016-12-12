<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\MasterBuku */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-buku-view">

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>
    <div class="col-md-12">
        <div class="col-md-3">
            <?= Html::img('@web/image/book/' . $model->id . '.jpg', ['width' => '180', 'height' => '255']) ?>
        </div>
        <div class="col-md-9"> 
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'edisi',
                    'pengarang',
                    'deskripsi:ntext',
                    'penerbit',
                    'judul',
                    'jumlah_buku',
                    'bahasa',
                    // 'gambar',
                    'subjek',
                    'topik',
                ],
            ])
            ?>
        </div>    
    <?= Html::a('Tambah Copy Buku', ['detail-buku/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>    
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_buku',
            'isbn',
            'klasifikasi',
            'lokasi',
            //'cp_or',
            'tahun',
            // 'id_master_buku',
//            'jenis',
//            'status',
            'tgl_masuk',
//            [
//                    'attribute' => 'Detail',
//                    'format' => 'raw',
//                    'value' => function ($model) {
//                        return '<div>' . Html::a('Lihat', [
//                                    'detail-buku/view', 'id' => $model->id_buku], ['class' => 'btn btn-block btn-success btn-xs']) . '</div>';
//                    },
//            ],
            [
                'attribute' => 'Aksi',
                'format' => 'raw',
                'value' => function($model) {
                    if ($model->availability == '1') {
                        return Html::a('<button class="btn btn-block btn-success btn-xs">Pesan</button>', ['borrow', 'id' => $model->id_buku, 'id_master_buku' => $model->id_master_buku]);
                    } else {
                        return ' ';
                    }
                }
                    ],
//                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
</div>
