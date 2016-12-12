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
             'edisi',
            'judul',
            'pengarang',
             'deskripsi:ntext',
            'penerbit',
             'jumlah_buku',
             'bahasa',
             'gambar',
            'subjek',
            'topik',
],

]);
?>