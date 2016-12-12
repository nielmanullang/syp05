<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailArtikelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Artikels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-artikel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Artikel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_artikel',
            'file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
