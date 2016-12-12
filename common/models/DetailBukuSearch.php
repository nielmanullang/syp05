<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailBuku;

/**
 * DetailBukuSearch represents the model behind the search form about `common\models\DetailBuku`.
 */
class DetailBukuSearch extends DetailBuku
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_buku', 'isbn', 'klasifikasi', 'lokasi', 'cp_or', 'tahun', 'tgl_masuk'], 'safe'],
            [['id_master_buku', 'jenis', 'status', 'availability'], 'integer'],
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
        $query = DetailBuku::find();

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
            'id_master_buku' => $this->id_master_buku,
            'jenis' => $this->jenis,
            'status' => $this->status,
            'tgl_masuk' => $this->tgl_masuk,
            'availability' => $this->availability,
        ]);

        $query->andFilterWhere(['like', 'id_buku', $this->id_buku])
            ->andFilterWhere(['like', 'isbn', $this->isbn])
            ->andFilterWhere(['like', 'klasifikasi', $this->klasifikasi])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'cp_or', $this->cp_or])
            ->andFilterWhere(['like', 'tahun', $this->tahun]);

        return $dataProvider;
    }
}
