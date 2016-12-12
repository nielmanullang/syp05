<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
//            'batas pemengembalian',
            'Batas_Pengembalian',
            'Kategori',
            'ID_Bahan_Pustaka',
//            'id_trans_peminjaman',
            'Waktu_Peminjaman',
        // 'id_d_kaset',
        // 'acc1',
        // 'acc2',
        ],
    ]);
    ?>

</div>
