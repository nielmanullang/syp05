<?php 
	use frontend\assets\AppAsset;
	use miloschuman\highcharts\Highcharts;

	$this->title = 'Grafik Log';
	$this->params['breadcrumbs'][] = $this->title;

	$asset = frontend\assets\AppAsset::register($this);
	$baseUrl = $asset->baseUrl;

	echo Highcharts::widget([
				'scripts' => [
					'highcharts-more',   
					'modules/exporting', 
					'themes/grid' 
				],
				'options' => [
					'chart'=>[
						//'renderTo'=>'chartContainer',
						'type'=>'column',
						'width'=>'760',
					],
					'title' => ['text' => 'Grafik Pengunjung Per Bulan'],
					'subtitle'=> ['text'=>'Berdasarkan Log Activity'],
					'xAxis' => [
						'categories' => $chart_x_axis,
						'crosshair' => FALSE,
						'title' => ['text' => 'Bulan']
					],
					'yAxis' => [
						'title' => ['text' => NULL]
					],
					'credits' => ['enabled' => FALSE],
					'dataLabels' => ['enabled' => TRUE,],
					'series' => $chart_x_series, 
				]
			]);
?>