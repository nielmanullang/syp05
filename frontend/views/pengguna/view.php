<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pengguna */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            // 'password',
            'email:email',
            'batas_buku',
            'status',
            'NI',
            'nama',
            'alamat',
            'no_hp',
            'jabatan',
            'jurusan',
        ],
    ]) ?>
    
</div>
