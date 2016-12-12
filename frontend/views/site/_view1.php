<?php

use yii\helpers\Html;
?>


<div class="col-md-12" >
  <div class="featured_slider horizontal-slide clearfix" style="border-radius:10px">
	<div class="time" style="color:#fff">
	    <?= $model->tgl_mulai ?>
	</div>
	<h4 style="margin-top: 0px; margin-bottom: 0px; padding-left:1px">
	    <a href="?r=master-pengumuman%2Fview&id=<?= $model->id?>" style="color:#fff"><?= $model->judul ?></a>
	</h4>
	<div class="meta" style="color:#fff" >
	    oleh
	    <?= $model->idPengguna->nama ?>
	</div>
  </div>
	<p style="background-color:rgba(255, 255, 255, 0.65); padding-left:15px; padding-right:15px; border-radius:10px; font-size:16px;" >
	<br><?=substr(strip_tags($model->isi), 0, 250) ?>...
	    <br><br><?= Html::a('Lihat Selengkapnya', ['master-pengumuman/view', 'id'=>$model->id], ['class' => 'btn btn-sm btn-primary']) ?>
	    <br><br>
	</p>
</div>

