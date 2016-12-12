<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PesanPinjam */

$this->title = 'Create Pesan Pinjam';
$this->params['breadcrumbs'][] = ['label' => 'Pesan Pinjams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-pinjam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
