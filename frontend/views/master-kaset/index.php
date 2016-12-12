<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MasterKasetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Kaset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kaset-index">
<div class="col-md-6">
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
</div>
<div class="col-xs-12">
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
            [
                'attribute' => 'judul',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a('' . $model->judul . '', ['master-kaset/view', 'id' => $model->id]);
                }
                    ],
//                    'jumlah',
                    'keterangan:ntext',
//                    'jenis',
                    // 'gambar',
                     'subjek',
                    // 'prodi_pemilik',
                ],
            ]);
            ?>
</div>
</div>
