<?php
common\components\ExcelGrid::widget([
'dataProvider'=> $dataProvider,
'filterModel'=>$searchModel,
//'extension'=>'xlsx',
'filename'=>'Master Buku',
'properties'=>[
	
],
'columns'=>[
	['class'=>'yii\grid\SerialColumn'],
             'id',
            'judul',
            'jumlah',
            'keterangan:ntext',
            'jenis',
             'gambar',
             'subjek',
             'prodi_pemilik',
],

]);
?>