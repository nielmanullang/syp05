<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use frontend\assets\AppAsset;
use miloschuman\highcharts\Highcharts;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ArtikelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artikel';
$this->params['breadcrumbs'][] = $this->title;

//$asset = frontend\assets\AppAsset::register($this);
//$baseUrl = $asset->baseUrl;
?>

<html lang="en">
<body>
<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-item">
                        <table class="table responsive">
                            <div class="col-md-8" style="padding-left:0px; margin-left:0px">               
                                        <?= ListView::widget([
                                            'dataProvider' => $dataProvider,
                                            'itemView' => '_view1',
                                            'summary' => '',
                                        ]); ?>
                            </div>
                            <div class="col-md-4">
                                            <img src="<?= Yii::$app->request->baseUrl . '/pictures/1.jpg' ?>" width="300px"; height="200px"><hr>
                                            <img src="<?= Yii::$app->request->baseUrl . '/pictures/2.jpg' ?>" width="300px"; height="200px"><hr>
                                            <img src="<?= Yii::$app->request->baseUrl . '/pictures/3.jpg' ?>" width="300px"; height="200px"><hr>
                                            <img src="<?= Yii::$app->request->baseUrl . '/pictures/4.jpg' ?>" width="300px"; height="200px"><hr>
                                            <img src="<?= Yii::$app->request->baseUrl . '/pictures/1.jpg' ?>" width="300px"; height="200px"><hr>
                            </div>
                        </table>
                    </div>
                </div><!--/.col-md-8--> 
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
</body>

</html>
 
