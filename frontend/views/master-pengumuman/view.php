<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Announcement */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman', 'url' => ['index']];
?><br>
<div class="master-pengumuman-view">
    <div class="box box-widget">
        <div class='box-header with-border'>
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <?= $model->judul ?>
                    </h2>
                </div><!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">            
                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <div class="col-md-12"> <?= $model->isi ?>
                                <br>
                                <!--      
                                <?=
                                yii\widgets\DetailView::widget([
                                    'model' => $model,
//                                        'itemOptions' => ['class' => 'item'],
//                                        'itemView' => 'view_file',
//                                        'summary' => '',
                                ])
                                ?> -->

                                <?php
                                foreach ($file as $pengumuman) {
                                    echo Html::a(Html::encode($pengumuman->file), ['download', 'nama' => $pengumuman->file]) . '<br>';
                                }
                                ?>

                                <br>
                                Sitoluama, <?= $model->tgl_mulai ?>
                                <br><br>

                                ttd
                                <br><br>
                                <?= $model->idPengguna->nama ?> 
                            </div>

                        </table>
                    </div><!-- /.col -->


                </div><!-- /.row -->
                <!-- this row will not appear when printing -->
            </div>
        </div>
    </div>
