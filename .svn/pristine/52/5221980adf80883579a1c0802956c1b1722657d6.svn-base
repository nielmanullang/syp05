<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailPengumumanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Pengumumen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-pengumuman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Pengumuman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_pengumuman',
            'file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
