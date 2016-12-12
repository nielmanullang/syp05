<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form about `common\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_status', 'id_referensi_kategori', 'id_trans_pemesanan', 'acc1', 'acc2'], 'integer'],
            [['tgl_ganti_status', 'id_d_buku', 'id_d_kaset', 'tgl_pemeritahuan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pemesanan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_status' => $this->id_status,
            'tgl_ganti_status' => $this->tgl_ganti_status,
            'id_referensi_kategori' => $this->id_referensi_kategori,
            'id_trans_pemesanan' => $this->id_trans_pemesanan,
            'tgl_pemeritahuan' => $this->tgl_pemeritahuan,
            'acc1' => $this->acc1,
        ]);

        $query->andFilterWhere(['like', 'id_d_buku', $this->id_d_buku])
            ->andFilterWhere(['like', 'id_d_kaset', $this->id_d_kaset]);

        return $dataProvider;
    }
}
