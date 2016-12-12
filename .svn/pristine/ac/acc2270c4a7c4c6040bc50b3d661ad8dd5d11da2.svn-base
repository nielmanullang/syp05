<?php
/* @var $this yii\web\View */

use yii\widgets\ListView;
use yii\helpers\Html;

$this->title = 'Online Library Information System';
?>

<div class="container">
    <div class="row">
        <div class="col-md-10" >
            <div id="myCarousel" class="carousel slide" data-ride="carousel" align=" center">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="pictures/slider/bg1.jpg" alt="Chania">
                    </div>  

                    <div class="item">
                        <img src="pictures/slider/bg2.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="pictures/slider/bg3.jpg" alt="Chania">
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-10" style="margin-right:3px">
            <h3><i class="fa fa-info"></i>
                Pengumuman </h3>
            <?php
            foreach ($dataProvider as $model) {
                echo '<H5>' . '<i class="fa fa-tag"> ' . Html::a(Html::encode($model->judul), ['master-pengumuman/view', 'id' => $model->id]) . '</i>' . '</h5>';
            }
            ?>
        </div>
    </div>
</div>
<br>

