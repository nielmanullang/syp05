<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PesanPinjamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesan Pinjams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-pinjam-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'tgl_transaksi',
            'jumlah_barang',
            'id_jenis',
            [
                'attribute' => 'Aksi',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<div>' . Html::a('Cancel', [
                                'pesan-pinjam/cancel', 'id' => $model->id, 'id_jenis' => $model->id_jenis], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to cancel this request?',
                                    'method' => 'post',
                                ],
                            ]) . '</div>';
                },
                    ],
//            ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>

</div>
