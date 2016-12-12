<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Peminjaman;

/**
 * PeminjamanSearch represents the model behind the search form about `common\models\Peminjaman`.
 */
class PeminjamanSearch extends Peminjaman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_trans_peminjaman', 'id_referensi_kategori', 'acc1', 'acc2'], 'integer'],
            [['tgl_kembali', 'rencana_kembali', 'id_d_buku', 'id_d_kaset'], 'safe'],
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
        $query = Peminjaman::find();

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
            'tgl_kembali' => $this->tgl_kembali,
            'rencana_kembali' => $this->rencana_kembali,
            'id_trans_peminjaman' => $this->id_trans_peminjaman,
            'id_referensi_kategori' => $this->id_referensi_kategori,
            'acc1' => $this->acc1,
            'acc2' => $this->acc2,
        ]);

        $query->andFilterWhere(['like', 'id_d_buku', $this->id_d_buku])
            ->andFilterWhere(['like', 'id_d_kaset', $this->id_d_kaset]);

        return $dataProvider;
    }
}
