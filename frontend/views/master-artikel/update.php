<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MasterArtikel */

$this->title = 'Edit Artikel Artikel: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Artikel', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="master-artikel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
