<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MasterPengumumanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Pengumuman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-pengumuman">
        <div class="box box-widget">
            <div class='box-header with-border'>

                <!-- title row -->
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-md-4">

                        <?= $this->render('_search.php', ['model' => $searchModel]) ?>

                        <?php if (Yii::$app->user->can('staff')) { ?>   
                            <?= Html::a('  Tambah Pengumuman Baru', ['create'], ['class' => 'btn btn-success fa fa-plus']) ?> 
                        <?php } ?>
                        <br>
                        <br>
                    </div>
                    <!-- Table row -->

                    <div class="col-xs-12">
                        <table class="table table-striped">
                            <?=
                            yii\grid\GridView::widget([
                                'dataProvider' => $dataProvider,
//                        'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    [
                                        'attribute' => 'judul',
                                        'format' => 'raw',
                                        'value' => function($model) {
                                            return Html::a('' . $model->judul . '', ['master-pengumuman/view', 'id' => $model->id]);
                                        }
                                    ],
                                    'tgl_mulai',
                                    ],
                                    ]);
                                    ?>

                        </table>
                    </div><!-- /.col -->
                    <!-- /.row -->
                           
                </div>
            </div>           
        </div>                 
