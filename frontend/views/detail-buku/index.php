<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailBukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Bukus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-buku-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Buku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_buku',
            'isbn',
            'klasifikasi',
            'lokasi',
            'cp_or',
            // 'tahun',
            // 'id_master_buku',
            // 'jenis',
            // 'status',
            // 'tgl_masuk',
            // 'availability',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
