<?php

namespace frontend\controllers;

use Yii;
use common\models\Log;
use common\models\LogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Pengguna;

/**
 * LogController implements the CRUD actions for Log model.
 */
class LogController extends Controller
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
     * Lists all Log models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LogSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $penggunas = new Pengguna();
        $model = new Log();
        $models = Log::find()->limit(1);
        
        $dataProvider = new \yii\data\ActiveDataProvider([
           'query' => $models,
            'sort' => ['defaultOrder'=>['id'=>SORT_DESC]],
            'pagination' => ['pageSize' => 10],
            
        ]);
        
        if ($model->load(Yii::$app->request->post())) {
            $pengguna = Pengguna::find()->where(['NI'=>$model->id_anggota])->one();
            $model->tanggal = date('Y-m-d H:m:s'); 
            $model->status = "Masuk";
            $model->id_anggota = $pengguna->id;
            $model->save();
            
            return $this->redirect(['index', 'id' => $model->id]);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
            'penggunas'=>$penggunas,
        ]);
    }
	
	public function actionGrafik(){
		$_xseries = Yii::$app->db->createCommand("SELECT DISTINCT MONTHNAME(STR_TO_DATE(MONTH(tanggal), '%m')) FROM t_d_log")->queryAll();
		$_xseries_data = array();
		
		$_nseries = Yii::$app->db->createCommand("SELECT t_m_pengguna.jabatan FROM t_m_pengguna JOIN t_d_log ON t_m_pengguna.`id` = t_d_log.id_anggota GROUP BY t_m_pengguna.jabatan")->queryAll();
		$data_series = array();
		
		$_data = array();
		$_data_series = array ();
		
		foreach ($_xseries as $xs)
		{
			$_xseries_data[] = $xs;
		}
		
		foreach ($_nseries as $ns)
		{
			array_push($data_series,array("name"=>$ns["jabatan"],));
		}
		
		foreach ($data_series as $ds)
		{
			$months = Yii::$app->db->createCommand("SELECT COUNT(t_d_log.id_anggota) AS jlh FROM t_d_log 
									JOIN t_m_pengguna ON t_d_log.id_anggota = t_m_pengguna.`id` 
									WHERE t_m_pengguna.jabatan = '".$ds["name"]."' 
									GROUP BY MONTH(t_d_log.tanggal)")->queryAll();
									
			foreach ($months as $m)
			{
				$_data_series[] = (int)$m["jlh"];
			}
			array_push($_data,array(
				'name'=>$ds["name"],
				'data'=>$_data_series,
			));
			unset($_data_series);
		}
		return $this->render('grafik',[
				'chart_x_axis' => $_xseries_data,
				'chart_x_series' => $_data,
			]);
	}

    /**
     * Displays a single Log model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Log model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Log();

//        $pengguna = Pengguna::find()->where(['NI'=>$this->id_anggota]);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Log model.
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
     * Deletes an existing Log model.
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
     * Finds the Log model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Log the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Log::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
