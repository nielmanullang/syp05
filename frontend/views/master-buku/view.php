<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\MasterBuku */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-view">

    <div class="col-md-12">
        <div class="col-md-3">
            <?= Html::img(Yii::$app->urlManagerBackend->baseUrl . '/image/book/' . $model->id . '.jpg', ['width' => '180', 'height' => '255']) ?>
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
//            'jumlah_buku',
                    'bahasa',
                    // 'gambar',
                    'subjek',
                    'topik',
                ],
            ])
            ?>
        </div>        
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
            'cp_or',
            'tahun',
            'id_master_buku',
//            'jenis',
//            'status',
            'tgl_masuk',
            // 'availability',
            // [
            //     'attribute' => 'Aksi',
            //     'format' => 'raw',
            //     'value' => function($model) {
            //         if ($model->availability == '1') {
            //             return Html::a('<button class="btn btn-block btn-success btn-xs">Pinjam</button>', ['borrow', 'id_buku' => $model->id_master_buku, 'id' => $model->id_master_buku]);
            //         } else {
            //             return ' ';     
            //         }
            //     }
            // ],
//            [
//                'attribute' => 'Detail',
//                'format' => 'raw',
//                'value' => function ($model) {
//                    return '<div>' . Html::a('Lihat', [
//                                'detail-buku/view', 'id' => $model->id_buku], ['class' => 'btn btn-block btn-success btn-xs']) . '</div>';
//                },
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
                // ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
                    ?>
</div>
