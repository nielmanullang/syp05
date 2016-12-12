<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailKasetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Kasets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-kaset-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Kaset', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kaset',
            'cp_or',
            'id_master_kaset',
            'status',
            'tgl_masuk',
            // 'sumber',
            // 'lokasi',
            // 'klasifikasi',
            // 'jenis',
            // 'isbn',
            // 'sifat',
            // 'availability',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
