<?php

namespace backend\controllers;

use Yii;
use common\models\Pengguna;
use common\models\PenggunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\ChangePassword;

/**
 * PenggunaController implements the CRUD actions for Pengguna model.
 */
class PenggunaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pengguna models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenggunaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pengguna model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionViewprofile($id)
    {
        if(!Yii::$app->user->can('update_profile')){
            throw new ForbiddenHttpException;
        }

        return $this->render('viewprofile', [
            'model' => $this->findModel($id),
        ]);
    }    
    
    public function actionChange_password() {
        $user = Yii::$app->user->identity;
        $model = new ChangePassword();
        $loadedpost = $model->load(Yii::$app->request->post());
        if ($loadedpost) {
            if ($model->validate()) {
                $user->setPassword($model->newPassword);
                $user->save(false);
                Yii::$app->session->setFlash('success', 'You have succesfully changed your password');
                return $this->refresh();
            }
        }
        return $this->render('change_password', [
                    'user' => $model,
        ]);
    }    
    
    /**
     * Creates a new Pengguna model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pengguna();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pengguna model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pengguna model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pengguna model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pengguna the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pengguna::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}