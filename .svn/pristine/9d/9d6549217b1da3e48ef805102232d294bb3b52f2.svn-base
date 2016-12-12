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
     <div class="col-md-12">
        <div class="col-md-3">
            <?= Html::img(Yii::$app->urlManagerBackend->baseUrl . '/image/kaset/' . $model->id . '.jpg', ['width' => '180', 'height' => '255']) ?>
        </div>
    <div class="col-md-9"> 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            'jumlah',
            'keterangan:ntext',
//            'jenis',
//            'gambar',
            'subjek',
            'prodi_pemilik',
        ],
    ]) ?>
    </div>        
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
            'cp_or',
            // 'tahun',
            'id_master_kaset',
//            'jenis',  
//            'status',
            'tgl_masuk',
            // 'availability',
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
 