<?php

namespace frontend\controllers;

use Yii;
use common\models\PesanPinjam;
use common\models\PesanPinjamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Pengguna;
use yii\data\ActiveDataProvider;

/**
 * PesanPinjamController implements the CRUD actions for PesanPinjam model.
 */
class PesanPinjamController extends Controller {

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
     * Lists all PesanPinjam models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new PesanPinjamSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex() {
        $id = Yii::$app->user->id;
        $pengguna = Pengguna::findOne(['id' => $id]);
        $searchModel = new PesanPinjamSearch();
        $dataProvider = new ActiveDataProvider([
            'query' => PesanPinjam::find()->where(['id_pengguna' => $id])->andWhere('id_jenis != 12'),
        ]);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCancel($id, $id_jenis) {

        $model = $this->findModel($id);
        $model->id_jenis = 12;

        $pemesanan = \common\models\Pemesanan::findOne(['id' => $model->tDPemesanans->id]);

        $test = 10;
        $test2 = 9;

        if ($id_jenis == $test) {
            $disk = \common\models\DetailKaset::find()->where(['id_kaset' => $pemesanan->id_d_kaset])->one();
            $disk->availability = 1;
            $disk->save();
        } else if ($id_jenis == $test2) {
            $book = \common\models\DetailBuku::find()->where(['id_buku' => $pemesanan->id_d_buku])->one();
            $book->availability = 1;
            $book->save();
        }

        if ($model->save() && $pemesanan->save()) {
            return $this->redirect(['index', 'status' => 'cancel']);
        }
    }

    /**
     * Displays a single PesanPinjam model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PesanPinjam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new PesanPinjam();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PesanPinjam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
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
     * Deletes an existing PesanPinjam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionPustakaBaru() {
        $searchModel = new PesanPinjamSearch();
        $dataProvider = new \yii\data\SqlDataProvider([
            'sql' => "SELECT t_m_buku.`judul`, t_d_buku.`tgl_masuk`, t_d_buku.`isbn`, t_d_buku.klasifikasi
                    FROM t_m_buku JOIN t_d_buku ON t_m_buku.`id` = t_d_buku.`id_master_buku`
                    WHERE t_d_buku.`tgl_masuk` >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK)
                    UNION ALL
                    SELECT t_m_kaset.`judul`, t_d_kaset.`tgl_masuk`, t_d_kaset.`isbn`, t_d_kaset.klasifikasi
                    FROM t_m_kaset JOIN t_d_kaset ON t_m_kaset.`id` = t_d_kaset.`id_master_kaset`
                    WHERE t_d_kaset.`tgl_masuk` >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK) "
        ]);

        return $this->render('pustaka-baru', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the PesanPinjam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PesanPinjam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = PesanPinjam::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
