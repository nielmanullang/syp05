<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MasterKaset;

/**
 * MasterKasetSearch represents the model behind the search form about `common\models\MasterKaset`.
 */
class MasterKasetSearch extends MasterKaset
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jumlah', 'jenis'], 'integer'],
            [['judul', 'keterangan', 'gambar', 'subjek', 'prodi_pemilik'], 'safe'],
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
        $query = MasterKaset::find();

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
            'jumlah' => $this->jumlah,
            'jenis' => $this->jenis,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'subjek', $this->subjek])
            ->andFilterWhere(['like', 'prodi_pemilik', $this->prodi_pemilik]);

        return $dataProvider;
    }
}
