<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MasterBukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index">
    <div class="col-md-6">
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <div class="col-xs-12">
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'edisi',
            [
                'attribute' => 'judul',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a('' . $model->judul . '', ['master-buku/view', 'id' => $model->id]);
                }
                    ],
                    'pengarang',
                    // 'deskripsi:ntext',
                    'penerbit',
                    // 'jumlah_buku',
                    // 'bahasa',
                    // 'gambar',
                    'subjek',
                    // 'topik',
                ],
            ]);
            ?>
    </div>
</div>
