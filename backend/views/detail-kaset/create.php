<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailKaset */

$this->title = 'Create Detail Kaset';
$this->params['breadcrumbs'][] = ['label' => 'Detail Kasets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-kaset-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
