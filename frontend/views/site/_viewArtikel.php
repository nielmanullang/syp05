<?php
	use yii\helpers\Html;
	
?>
<div class="col-md-12"> 
<div class="col-md-4">
      <div class="info-box bg-blue"style="padding-top: 5px; padding-bottom: 0px; border-radius:10px"> 
          <font style="color:#fff"><?= $model->tgl_mulai?></font>
          <font style="color:#fff"><br>oleh <?= $model->idPengguna->nama?></font>
      </div><!-- /.info-box -->
</div>
<div class="col-md-8">	
		<div class="info-box" style="padding-left: 10px; border-radius:10px">
			<h3 style="margin-top: 8px;"><?= Html::a($model->judul, ['view','id' => $model->id])?></h1>
			<div class="content-fill">
				<p style="text-align:justify; font-size:17px; font-family:Calibri"><?=
					substr(strip_tags($model->isi), 0, 290) ?>...</p>
				<?= Html::a('Lihat Selengkapnya', ['master-artikel/view', 'id'=>$model->id], ['class' => 'btn btn-sm btn-primary']) ?>
			</div>
		</div>
</div>

</div>