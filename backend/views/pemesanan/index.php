<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widget\ListView;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PemesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemesanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
            'Waktu_Pemesanan',
            'Kategori',
            'ID_Bahan_Pustaka',
//            [
//                'attribute' => 'Aksi',
//                'format' => 'raw',
//                'value' => function ($model) {
//                    return '<div>' . Html::a('Cancel', [
//                                'pesan-pinjam/cancel', 'id' => $model->id, 'id_jenis' => $model->id_jenis], [
//                                'class' => 'btn btn-danger',
//                                'data' => [
//                                    'confirm' => 'Are you sure you want to cancel this request?',
//                                    'method' => 'post',
//                                ],
//                            ]) . '</div>';
//                },
//            ],
//            'id_trans_pemesanan',
                // 'id_d_buku',
                // 'id_d_kaset',
                // 'tgl_pemeritahuan',
                // 'acc1',
                // 'acc2',
                ],
            ]);
            ?>

</div>
