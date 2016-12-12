<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailDenda */

$this->title = 'Create Detail Denda';
$this->params['breadcrumbs'][] = ['label' => 'Detail Dendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-denda-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
