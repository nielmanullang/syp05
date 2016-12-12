<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailPengumuman */

$this->title = 'Create Detail Pengumuman';
$this->params['breadcrumbs'][] = ['label' => 'Detail Pengumumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-pengumuman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
