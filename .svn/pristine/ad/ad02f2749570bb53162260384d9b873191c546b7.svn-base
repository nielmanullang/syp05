<?php

namespace backend\controllers;

use Yii;
use common\models\MasterBuku;
use common\models\MasterBukuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\DetailBuku;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use common\models\PesanPinjam;
use common\models\Pemesanan;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * MasterBukuController implements the CRUD actions for MasterBuku model.
 */
class MasterBukuController extends Controller
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
     * Lists all MasterBuku models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MasterBukuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionExcel() {
        $searchModel = new MasterBukuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('excel', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single MasterBuku model.
     * @param integer $id
     * @return mixed
     */
    // public function actionView($id)
    // {
    //     return $this->render('view', [
    //         'model' => $this->findModel($id),
    //     ]);
    // }

    public function actionView($id) {
        $bookcopies = DetailBuku::find()->where(['id_master_buku' => $id]);

        $DataProvider = new ActiveDataProvider(
                [ 'query' => $bookcopies,
            'pagination' => [
                'pageSize' => 10
            ]
                ]
        );
        $model = $this->findModel($id);
        // $author = Author::findOne(['id' => $model->author_id]);
        return $this->render('view', [
                    'model' => $model,
                    // 'author' => $author,
                    'dataProvider' => $DataProvider,
            ]);
    }

    public function actionBorrow($id, $id_master_buku) {
        // 
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['//site/login']);
        } else {
            $pemesanan = new Pemesanan();
            $user = Yii::$app->user->id;
            
            $pesanpinjam = new PesanPinjam();
            $pesanpinjam->tgl_transaksi= date('Y-m-d');
            $pesanpinjam->jumlah_barang=1;
            $pesanpinjam->id_jenis=9;
            $pesanpinjam->id_pengguna=$user;
            $pesanpinjam->save();

            $pemesanan->id_status=3;
            $pemesanan->id_referensi_kategori=1;
            $pemesanan->id_trans_pemesanan=$pesanpinjam->id;
            $pemesanan->id_d_buku=$id;
            $pemesanan->save();
//
//            $bookcopies = DetailBuku::find()->where(['id_buku' => $id])->one();           
//            $bookcopies->availability=0;
//            $bookcopies->save();
        }
        return $this->redirect(['//pemesanan']);
    }
    /**
     * Creates a new MasterBuku model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MasterBuku();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->file = UploadedFile::getInstance($model, 'file');
            $path = Url::to("@backend/web/image/book/");
            for ($i = 0; $i < strlen($path); $i++) {
                if ($path{$i} == "\\") {
                    $path{$i} = '/';
                }
            }
            $model->file->saveAs('image/book/' . $model->id . '.' . 'jpg');
            $model->file->saveAs($path . $model->id . '.' . 'jpg');
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MasterBuku model.
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
     * Deletes an existing MasterBuku model.
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
     * Finds the MasterBuku model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MasterBuku the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MasterBuku::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
 