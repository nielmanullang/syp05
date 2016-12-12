<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailBuku */

$this->title = 'Create Detail Buku';
$this->params['breadcrumbs'][] = ['label' => 'Detail Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-buku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
