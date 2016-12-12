<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MasterPengumuman */

$this->title = 'Create Pengumuman';
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-pengumuman-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
