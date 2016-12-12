<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PenggunaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penggunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pengguna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'password',
            'email:email',
            'batas_buku',
            // 'status',
            // 'NI',
            // 'nama',
            // 'alamat',
            // 'no_hp',
            // 'jabatan',
            // 'jurusan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>