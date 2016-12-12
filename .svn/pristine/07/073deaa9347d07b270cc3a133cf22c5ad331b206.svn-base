<?php

namespace frontend\controllers;

use Yii;
use common\models\MasterKaset;
use common\models\MasterKasetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\DetailKaset;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use common\models\PesanPinjam;
use common\models\Pemesanan;

/**
 * MasterKasetController implements the CRUD actions for MasterKaset model.
 */
class MasterKasetController extends Controller
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
     * Lists all MasterKaset models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MasterKasetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single MasterKaset model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        $cdcopies = DetailKaset::find()->where(['id_master_kaset' => $id]);

        $DataProvider = new ActiveDataProvider(
                [ 'query' => $cdcopies,
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

    public function actionBorrow($id, $id_master_kaset) {
        // 
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['//site/login']);
        } else {
            $pemesanan = new Pemesanan();
            $user = Yii::$app->user->id;
            
            $pesanpinjam = new PesanPinjam();
            $pesanpinjam->tgl_transaksi= date('Y-m-d');
            $pesanpinjam->jumlah_barang=1;
            $pesanpinjam->id_jenis=10;
            $pesanpinjam->id_pengguna=$user;
            $pesanpinjam->save();

            $pemesanan->id_status=3;
            $pemesanan->id_referensi_kategori=2;
            $pemesanan->id_trans_pemesanan=$pesanpinjam->id;
            $pemesanan->id_d_kaset=$id;
            $pemesanan->save();

            $bookcopies = DetailKaset::find()->where(['id_kaset' => $id])->one();           
            $bookcopies->availability=0;
            $bookcopies->save();
        }
        return $this->redirect(['//pemesanan']);
    }
    /**
     * Creates a new MasterKaset model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MasterKaset();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MasterKaset model.
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
     * Deletes an existing MasterKaset model.
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
     * Finds the MasterKaset model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MasterKaset the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MasterKaset::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
 