<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuthAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Peran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'item_name',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a('' . $model->item_name . '', ['auth-assignment/view', 'item_name' => $model->item_name, 'user_id' => $model->user_id]);
                }
                    ],
//                    'item_name',
                    'pengguna.nama',
//            'created_at',
//            ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>

</div>
