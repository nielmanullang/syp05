<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MasterPengumuman */

$this->title = 'Tambah Pengumuman';
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
