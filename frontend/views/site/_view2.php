<?php

use yii\helpers\Html;
?>
<tr>
<td>
<center>
<div class="entry-thumbnail col-md-4">
    <a href="?r=master-buku%2Fview&id=<?= $model->id ?>">
        <?= Html::img(Yii::$app->urlManagerBackend->baseUrl . '/image/book/' . $model->id . '.jpg', ['width' => '130', 'height' => '180']) ?>
        
    </a>
</div></center>
<div class="col-md-7">
	<div class="meta" style="background-color:rgba(255, 255, 255, 0.65);">
		<h3 style="margin-top: 5px; background-color:rgba(255, 255, 255, 0.65);">
		    <a href="?r=master-buku%2Fview&id=<?= $model->id?>"><?= $model->judul ?></a>
		</h3>
		    oleh
		    <b><?= $model->pengarang ?></b>
	</div>
	<p style="background-color:rgba(255, 255, 255, 0.65);">
	<?=substr(strip_tags($model->deskripsi), 0, 50) ?>...
	    <?= Html::a('Lihat Selengkapnya', ['master-buku/view', 'id'=>$model->id], ['class' => 'btn btn-sm btn-primary']) ?>
	</p><hr>
</div>
</td>
</tr>
