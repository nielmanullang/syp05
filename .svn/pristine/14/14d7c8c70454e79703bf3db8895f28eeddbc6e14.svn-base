<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailDendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Dendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-denda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Denda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'besar_denda',
            'id_detail_peminjaman',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
