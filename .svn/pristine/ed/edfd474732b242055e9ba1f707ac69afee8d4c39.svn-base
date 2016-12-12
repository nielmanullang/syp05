<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PesanPinjamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pustaka Baru';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-pinjam-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                'judul',
                'tgl_masuk',
                'isbn',
                'klasifikasi',
                ],
            ]);
            ?>

</div>
