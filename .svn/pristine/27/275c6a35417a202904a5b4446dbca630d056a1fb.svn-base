<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailKaset;

/**
 * DetailKasetSearch represents the model behind the search form about `common\models\DetailKaset`.
 */
class DetailKasetSearch extends DetailKaset
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kaset', 'cp_or', 'tgl_masuk', 'sumber', 'lokasi', 'klasifikasi', 'jenis', 'isbn', 'sifat'], 'safe'],
            [['id_master_kaset', 'status', 'availability'], 'integer'],
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
        $query = DetailKaset::find();

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
            'id_master_kaset' => $this->id_master_kaset,
            'status' => $this->status,
            'tgl_masuk' => $this->tgl_masuk,
            'availability' => $this->availability,
        ]);

        $query->andFilterWhere(['like', 'id_kaset', $this->id_kaset])
            ->andFilterWhere(['like', 'cp_or', $this->cp_or])
            ->andFilterWhere(['like', 'sumber', $this->sumber])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'klasifikasi', $this->klasifikasi])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'isbn', $this->isbn])
            ->andFilterWhere(['like', 'sifat', $this->sifat]);

        return $dataProvider;
    }
}
