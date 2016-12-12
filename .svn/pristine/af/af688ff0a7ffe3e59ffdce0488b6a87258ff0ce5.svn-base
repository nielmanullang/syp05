<?php

namespace frontend\controllers;

use Yii;
use common\models\Pemesanan;
use common\models\PemesananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Pengguna;
use common\models\PesanPinjamSearch;

/**
 * PemesananController implements the CRUD actions for Pemesanan model.
 */
class PemesananController extends Controller {

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
     * Lists all Pemesanan models.
     * @return mixed
     */
    public function actionIndex() {
        $id = Yii::$app->user->id;
        $pengguna = Pengguna::findOne(['id' => $id]);
        $pemesanan = Pemesanan::findOne(['id' => $id]);
        $searchModel = new PesanPinjamSearch();
        $dataProvider = new \yii\data\SqlDataProvider([
            'sql' => "SELECT t_d_pemesanan.id, tgl_transaksi AS 'Waktu_Pemesanan', 
            (SELECT jenis_kategori FROM t_kategori_denda WHERE id = id_referensi_kategori) AS 'Kategori',
            id_d_buku AS 'ID_Bahan_Pustaka'
            FROM t_d_pemesanan, t_t_pesan_pinjam
            WHERE tgl_pemeritahuan IS NULL AND id_referensi_kategori = 1 AND t_d_pemesanan.`id_trans_pemesanan` = t_t_pesan_pinjam.`id` 
            UNION
            SELECT t_d_pemesanan.id, tgl_transaksi AS 'Waktu_Pemesanan', 
            (SELECT jenis_kategori FROM t_kategori_denda WHERE id = id_referensi_kategori) AS 'Kategori', 
            id_d_kaset AS 'ID_Bahan_Pustaka'
            FROM t_d_pemesanan JOIN t_t_pesan_pinjam ON  t_d_pemesanan.`id_trans_pemesanan` = t_t_pesan_pinjam.`id`
            WHERE tgl_pemeritahuan IS NULL AND id_referensi_kategori=2 AND id_pengguna = " . Yii::$app->user->id
        ]);

        return $this->render('index', [
                    'pemesanan' => $pemesanan,
                    'pengguna' => $pengguna,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionApprove($id, $id_status) {
        $time = date("Y-m-d");
        $pesanpengguna = Pemesanan::find()->where(['id' => $id])->one();
        $pesanpengguna->tgl_pemberitahuan = $time;
        $pesanpengguna->tgl_ganti_status = date("Y-m-d", strtotime($time . '+1 days'));
        $pesanpengguna->save();
        $book_copies = new BookCopy();
        $book_copy = BookCopy::find()->where(['id' => $id_status])->one();
        $book_copy->availability = 0;
        $book_copy->save();
        $this->redirect(['/loan']);
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
     * Displays a single Pemesanan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pemesanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Pemesanan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pemesanan model.
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
     * Deletes an existing Pemesanan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pemesanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pemesanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Pemesanan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
