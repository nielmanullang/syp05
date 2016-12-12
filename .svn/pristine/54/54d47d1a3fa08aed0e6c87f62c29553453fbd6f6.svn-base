<?php
	use yii\helpers\Html;
	
?>
<div class="col-md-12">
	<div class="col-md-3">
      <div class="info-box bg-blue"> 
        <div class="info-box-content">
          <span class="info-box-text"><font style="color:#fff"><?= $model->tgl_mulai?></font></span>
		  <i class="fa fa-user"></i> 
          <span class="info-box-number"><font style="color:#fff"><br>Oleh : <b><?= $model->idPengguna->nama?></b></font></span> 
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
	</div>
	<div class="col-md-9">
		<div class="content" style="min-height: 300px ;padding-top: 0px;padding-left: 10px;padding-right: 10px;padding-bottom: 0px;">
			<h2 style="margin-top: 8px;"><b><?= Html::a($model->judul, ['view','id' => $model->id])?></b></h2>
			<div class="content-fill">
				<p style="text-align:justify; font-size:18px; font-family:Calibri"><?=
					substr(strip_tags($model->isi), 0, 290) ?>...</p>
				<?= Html::a('Lihat Selengkapnya', ['view', 'id'=>$model->id], ['class' => 'btn btn-sm btn-primary']) ?>
			</div>
		</div>
	</div>
</div>
