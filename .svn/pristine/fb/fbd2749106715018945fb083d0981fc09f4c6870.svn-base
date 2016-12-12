<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->nama;
?>
<div class="book-index">
    <section class="content">
        <div class="row">
            <div class="box-header">
                <h3 class="box-title"><?= Html::a('', ['update', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil']) ?>  <?= Html::a('', ['/pengguna/change_password', 'id' => $model->id], ['class' => 'glyphicon glyphicon-user']) ?></h3>                    
                <p><?=
                    DetailView::widget([
                        'model' => $model,
                        'attributes' => [
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
                    ])
                    ?>       
            </div>
        </div>
    </section>>     
</div>
