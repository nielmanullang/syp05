<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\MasterKaset */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Kaset', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kaset-view">

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
     <div class="col-md-12">
       <div class="col-md-3">
            <?= Html::img('@web/image/kaset/' . $model->id . '.jpg', ['width' => '180', 'height' => '255']) ?>
        </div>
    <div class="col-md-9"> 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            'jumlah',
            'keterangan:ntext',
           // 'jenis',
//            'gambar',
            'subjek',
            'prodi_pemilik',
        ],
    ]) ?>
    </div>    
        <?= Html::a('Tambah Copy Kaset', ['detail-kaset/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kaset',
            'isbn',
            'klasifikasi',
            'lokasi',
            //'cp_or',
            // 'tahun',
            'id_master_kaset',
            //'jenis',
//            'status',
            'tgl_masuk',
            // 'availability',
//            [
//                    'attribute' => 'Detail',
//                    'format' => 'raw',
//                    'value' => function ($model) {
//                        return '<div>' . Html::a('Lihat', [
//                                    'detail-kaset/view', 'id' => $model->id_kaset], ['class' => 'btn btn-block btn-success btn-xs']) . '</div>';
//                    },
//            ],
            [
                'attribute' => 'Aksi',
                'format' => 'raw',
                'value' => function($model) {
                    if ($model->availability == '1') {
                        return Html::a('<button class="btn btn-block btn-success btn-xs">Pesan</button>', ['borrow', 'id' => $model->id_kaset, 'id_master_kaset' => $model->id_master_kaset]);
                    } else {
                        return ' ';     
                    }
                }
            ],
            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
 