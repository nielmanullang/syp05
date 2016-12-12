<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PesanPinjam;

/**
 * PesanPinjamSearch represents the model behind the search form about `common\models\PesanPinjam`.
 */
class PesanPinjamSearch extends PesanPinjam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jumlah_barang', 'id_jenis', 'id_pengguna'], 'integer'],
            [['tgl_transaksi'], 'safe'],
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
        $query = PesanPinjam::find();

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
            'tgl_transaksi' => $this->tgl_transaksi,
            'jumlah_barang' => $this->jumlah_barang,
            'id_jenis' => $this->id_jenis,
            'id_pengguna' => $this->id_pengguna,
        ]);

        return $dataProvider;
    }
}
