<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailDendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Denda';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="denda-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Export Denda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

        <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
            'Nama',
            'Nomor_Induk',
            'Tanggal_Kembali',
            'Besar_Denda'
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
