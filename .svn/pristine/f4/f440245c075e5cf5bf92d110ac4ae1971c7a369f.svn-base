<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\PesanPinjam;
use common\models\Pengguna;
use common\models\DetailBuku;
use common\models\MasterBuku;
use common\models\DetailKaset;
use common\models\MasterKaset;

$this->title = 'Daftar Pemesanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loan-index">
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#permohonanbuku" data-toggle="tab">Permohonan Buku</a></li>
                        <li><a href="#permohonankaset" data-toggle="tab">Permohonan Kaset</a></li>
                        <li><a href="#terimabuku" data-toggle="tab">Permintaan Buku</a></li>
                        <li><a href="#terimakaset" data-toggle="tab">Permintaan Kaset</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="permohonanbuku">
                            <?= GridView::widget([
                                'dataProvider' => $permohonanbuku,
                                'columns' => [
                                    [
                                        'attribute' => 'Nama Pemohon',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $modelpemesan = PesanPinjam::find()->where(['id' => $model->id_trans_pemesanan])->one();
                                            $modelpengguna = Pengguna::find()->where(['id' => $modelpemesan->id_pengguna])->one();
                                            return $modelpengguna->nama;
                                        },
                                    ],
                                    [
                                        'attribute' => 'Judul Buku',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $modelpemesanan = DetailBuku::find()->where(['id_buku' => $model->id_d_buku])->one();
                                            $modeljudul = MasterBuku::find()->where(['id'=>$modelpemesanan->id_master_buku])->one();
                                            return $modeljudul->judul;
                                        },
                                    ],
                                    'id_d_buku',
                                    [
                                        'attribute' => 'Aksi',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            if ($model->id_status == '3') {
                                                return '<div>' . Html::a('Setuju', [ 'approve', 'id' => $model->id], [ 'class' => 'btn btn-success']) . '&nbsp;' . Html::a('Tolak', [ 'reject', 'id' => $model->id], ['class' => 'btn btn btn-danger']). '</div>';
                                            }
                                        },
                                    ],
                                ],
                            ]);?>
                        </div>
                        <div class="tab-pane" id="permohonankaset">
                            <?= GridView::widget([
                                'dataProvider' => $permohonankaset,
                                'columns' => [
                                    [
                                        'attribute' => 'Nama Pemohon',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $modelpemesan = PesanPinjam::find()->where(['id' => $model->id_trans_pemesanan])->one();
                                            $modelpengguna = Pengguna::find()->where(['id' => $modelpemesan->id_pengguna])->one();
                                            return $modelpengguna->nama;
                                        },
                                    ],
                                    [
                                        'attribute' => 'Judul Kaset',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $modelpemesanan = DetailKaset::find()->where(['id_kaset' => $model->id_d_kaset])->one();
                                            $modeljudul = MasterKaset::find()->where(['id'=>$modelpemesanan->id_master_kaset])->one();
                                            return $modeljudul->judul;
                                        },
                                    ],
                                    'id_d_kaset',
                                    [
                                        'attribute' => 'Aksi',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            if ($model->id_status == '3') {
                                                return '<div>' . Html::a('Setuju', ['approve', 'id' => $model->id], ['class' => 'btn btn-success']) . '&nbsp;'. Html::a('Tolak', ['reject', 'id' => $model->id], ['class' => 'btn btn btn-danger']). '</div>';
                                            }
                                        },
                                    ],
                                ],
                            ]); ?>
                        </div>
                        <div class="tab-pane" id="terimabuku">
                            <?= GridView::widget([
                                'dataProvider' => $terimabuku,
                                'columns' => [
                                    [
                                        'attribute' => 'Nama Pemohon',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $modelpemesan = PesanPinjam::find()->where(['id' => $model->id_trans_pemesanan])->one();
                                            $modelpengguna = Pengguna::find()->where(['id' => $modelpemesan->id_pengguna])->one();
                                            return $modelpengguna->nama;
                                        },
                                    ],
                                    [
                                        'attribute' => 'Judul Buku',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $modelpemesanan = DetailBuku::find()->where(['id_buku' => $model->id_d_buku])->one();
                                            $modeljudul = MasterBuku::find()->where(['id'=>$modelpemesanan->id_master_buku])->one();
                                            return $modeljudul->judul;
                                        },
                                    ],
                                    'id_d_buku',
                                    [
                                        'label' => 'Aksi',
                                        'format' => 'raw',
                                        'value' => function($model) {
                                            return '<div>' . Html::a('Pinjamkan', ['pesan-pinjam/pinjamkan', 'id' => $model->id, 'idRefKategori' => $model->id_referensi_kategori, 'idBahanPustaka' => $model->id_d_buku], ['class' => 'btn btn-primary']). '&nbsp;' . Html::a('Batalkan', ['return', 'id' => $model->id], ['class' => 'btn btn btn-danger']) .  '</div>';
                                        }
                                    ],
                                ],
                            ]); ?>
                        </div>
                        <div class="tab-pane" id="terimakaset">
                            <?=
                            GridView::widget([
                                'dataProvider' => $terimakaset,
                                'columns' => [
                                    [
                                        'attribute' => 'Nama Pemohon',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $modelpemesan = PesanPinjam::find()->where(['id' => $model->id_trans_pemesanan])->one();
                                            $modelpengguna = Pengguna::find()->where(['id' => $modelpemesan->id_pengguna])->one();
                                            return $modelpengguna->nama;
                                        },
                                    ],
                                    [
                                        'attribute' => 'Judul Kaset',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $modelpemesanan = DetailKaset::find()->where(['id_kaset' => $model->id_d_kaset])->one();
                                            $modeljudul = MasterKaset::find()->where(['id'=>$modelpemesanan->id_master_kaset])->one();
                                            return $modeljudul->judul;
                                        },
                                    ],
                                    'id_d_kaset',
                                    [
                                        'label' => 'Aksi',
                                        'format' => 'raw',
                                        'value' => function($model) {
                                            return '<div>' . Html::a('Pinjamkan', ['pesan-pinjam/pinjamkan', 'id' => $model->id, 'idRefKategori' => $model->id_referensi_kategori, 'idBahanPustaka' => $model->id_d_kaset], ['class' => 'btn btn-primary']). '&nbsp;' . Html::a('Batalkan', ['return', 'id' => $model->id], ['class' => 'btn btn btn-danger']) .  '</div>';
                                        }
                                    ],
                                ],
                            ]);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>