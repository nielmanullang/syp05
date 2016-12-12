<?php

namespace backend\controllers;

use Yii;
use common\models\MasterPengumuman;
use common\models\MasterPengumumanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\DetailPengumuman;
use yii\data\ActiveDataProvider;

/**
 * MasterPengumumanController implements the CRUD actions for MasterPengumuman model.
 */
class MasterPengumumanController extends Controller {

    public function behaviors() {
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
     * Lists all MasterPengumuman models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new MasterPengumumanSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = new ActiveDataProvider([
            'query' => MasterPengumuman::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort'=>[
                'defaultOrder' =>[
                    'id' => SORT_DESC
                ]
            ],
        ]);
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterPengumuman model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        
        $model = $this->findModel($id);
        $file = \common\models\DetailPengumuman::find()->where(['id_pengumuman' => $model->id])->all();
//        die($file->judul);
        return $this->render('view', [
                    'model' => $model,
                    'file' => $file,
        ]);
    }

    /**
     * Creates a new MasterPengumuman model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate()
//    {
//        $model = new MasterPengumuman();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        }
//    }
    public function actionCreate() {

        $model = new MasterPengumuman();

        if ($model->load(Yii::$app->request->post())) {
            echo $model->judul . '<br>';
            $date = date('Y-m-d H:i:s');
//            $postfix = Yii::$app->security->generateRandomString(4);
            $model->file = UploadedFile::getInstances($model, 'file');
            $model->tgl_mulai = $date;
            $model->id_pengguna = Yii::$app->user->id;
            $a = $model->save();
            //die($model->id);
            if ($model->file != NULL) {
                foreach ($model->file as $key => $file) {
                    $filename = $file->name;
                    $file->saveAs(Yii::getAlias('upload/') . 'pengumuman/' . $filename);
                    $filepengumuman = new \common\models\DetailPengumuman();
                    $filepengumuman->id_pengumuman = $model->id;
                    $filepengumuman->file = $filename;
                    $b = $filepengumuman->save();
                }
            } if ($a) {
                Yii::$app->session->setFlash('success', 'Pengumuman Berhasil Ditambahkan!');
            } else {
                Yii::$app->session->setFlash('error', 'Pengumuman Gagal Ditambahkan!');
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MasterPengumuman model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDownload($nama) {
        $path = Yii::getAlias('@webroot' . '/upload/pengumuman/');
        $file = $path . $nama;
        if (file_exists($file)) {
            return Yii::$app->response->sendFile($file);
        } else {
            throw new NotFoundHttpException('The file does not exist');
        }
    }

    public function actionUpdate($id) {
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
     * Deletes an existing MasterPengumuman model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MasterPengumuman model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MasterPengumuman the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = MasterPengumuman::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
