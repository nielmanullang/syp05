<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\KategoriDenda */

$this->title = 'Create Kategori Denda';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Dendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-denda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
