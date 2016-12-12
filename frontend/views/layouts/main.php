<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?>Online Library System IT Del</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= Html::img('pictures/header/1.jpg', ['width' => '100%', 'height' => '170'])?>
<div class="wrap">
    <?php
    NavBar::begin([
        //'brandLabel' => 'Online Library Information System',
        //'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    $menuItems = [
        ['label' => 'Beranda', 'url' => ['/site/index']],
        [
                            'label' => 'Bahan Pustaka',
                            'icon' => 'glyphicon glyphicon-book',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Buku', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/master-buku/index']],
                                ['label' => 'CD/DVD', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/master-kaset/index']],
//                                ['label' => 'Bahan Pustaka Baru', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/master-kaset/index']],
                            ],
        ],
        ['label' => 'Artikel', 'icon' => 'glyphicon glyphicon-list-alt', 'url' => ['/master-artikel/index']],
        ['label' => 'Pengumuman', 'icon' => 'glyphicon glyphicon-list-alt', 'url' => ['/master-pengumuman/index']],
        [
                            'label' => 'Aktivitas',
                            'icon' => 'glyphicon glyphicon-book',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Pinjaman Anda', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/peminjaman/index']],
                                ['label' => 'Pesanan Anda', 'icon' => 'glyphicon glyphicon-book', 'url' => ['/pemesanan/index']],
                            ], 'visible' => !Yii::$app->user->isGuest,
                        ],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p align="center">&copy; TI2_SYP05 <?= date('Y') ?></p>

    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
