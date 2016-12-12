<?php

namespace backend\controllers;

use Yii;
use common\models\DokumenAkhir;
use common\models\DokumenAkhirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DokumenAkhirController implements the CRUD actions for DokumenAkhir model.
 */
class DokumenAkhirController extends Controller
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
     * Lists all DokumenAkhir models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DokumenAkhirSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DokumenAkhir model.
     * @param integer $id
     * @param string $no_kelompok
     * @param string $tahun_ajaran
     * @return mixed
     */
    public function actionView($id, $no_kelompok, $tahun_ajaran)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $no_kelompok, $tahun_ajaran),
        ]);
    }

    /**
     * Creates a new DokumenAkhir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DokumenAkhir();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'no_kelompok' => $model->no_kelompok, 'tahun_ajaran' => $model->tahun_ajaran]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DokumenAkhir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $no_kelompok
     * @param string $tahun_ajaran
     * @return mixed
     */
    public function actionUpdate($id, $no_kelompok, $tahun_ajaran)
    {
        $model = $this->findModel($id, $no_kelompok, $tahun_ajaran);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'no_kelompok' => $model->no_kelompok, 'tahun_ajaran' => $model->tahun_ajaran]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DokumenAkhir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $no_kelompok
     * @param string $tahun_ajaran
     * @return mixed
     */
    public function actionDelete($id, $no_kelompok, $tahun_ajaran)
    {
        $this->findModel($id, $no_kelompok, $tahun_ajaran)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DokumenAkhir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $no_kelompok
     * @param string $tahun_ajaran
     * @return DokumenAkhir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $no_kelompok, $tahun_ajaran)
    {
        if (($model = DokumenAkhir::findOne(['id' => $id, 'no_kelompok' => $no_kelompok, 'tahun_ajaran' => $tahun_ajaran])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
