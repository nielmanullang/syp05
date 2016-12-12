<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KategoriDendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Dendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-denda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kategori Denda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenis_kategori',
            'denda_per_hari',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
