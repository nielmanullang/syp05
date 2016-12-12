<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= $this->render('_form', [
        'penggunas' => $penggunas,
        'model' => $model,
    ]) ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//             'id',
//              'id_anggota',
              'idAnggota.nama',
//            'tanggal',
//            'status',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    


</div>
