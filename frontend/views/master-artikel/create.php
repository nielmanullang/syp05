<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MasterArtikel */

$this->title = 'Tambah Artikel';
$this->params['breadcrumbs'][] = ['label' => 'Artikel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-artikel-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
