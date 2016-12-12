<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\MasterPengumuman;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex() {
        $searchModel = new \common\models\MasterPengumumanSearch();
        $model = new MasterPengumuman();
        $masterpengumuman = MasterPengumuman::find();

        $dataProvider = \common\models\MasterPengumuman::find()->limit(10)->orderBy('id DESC')->all();
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if (Yii::$app->user->can('staff')) {
                return $this->goBack();
            } else {
                return $this->redirect(@Yii::$app->urlManagerFrontend->baseUrl);
            }
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }
    public function actionLogout() {
        Yii::$app->user->logout();
        $frontend = "http://localhost";
        $path = Url::to("@frontend/web/index.php");

        for ($i = 15; $i < strlen($path); $i ++) {
            if ($path{$i} === "\\") {
                $frontend.='/';
            } else {
                $frontend.=$path{$i};
            }
        }
        $this->redirect($frontend);
    }
}
