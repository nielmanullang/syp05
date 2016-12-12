<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">OLIS</span><span class="logo-lg">OLIS</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <?php
                $Penggunas = new common\models\Pengguna();
                $pengguna = common\models\Pengguna::find()->where(['id' => Yii::$app->user->id])->one();
                $auths = new \backend\models\AuthAssignment();
                $auth = \backend\models\AuthAssignment::find()->where(['user_id' => Yii::$app->user->id])->one();
                ?>

                <!-- Messages: style can be found in dropdown.less-->

                <!-- Tasks: style can be found in dropdown.less -->
                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <?php if (!Yii::$app->user->isGuest) { ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">
                                <?= $pengguna->nama ?> <i class="caret"></i>
                            </span>
                        </a>
                        <?php
                    } else {
                        echo Html::a('Login', ['/site/login']);
                    }
                    ?>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <p><br><br><br>
                                <?= $pengguna->nama ?>
                                <br>
                                Role : <span class="label label-warning"><?= $auth->item_name ?></span>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <?=
                                Html::a(
                                        'Profile', ['/pengguna/viewprofile', 'id' => Yii::$app->user->identity->id], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                )
                                ?>
                            </div>
                            <div class="pull-right">
                                <?=
                                Html::a(
                                        'Sign out', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                )
                                ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->

            </ul>
        </div>
    </nav>
</header>
