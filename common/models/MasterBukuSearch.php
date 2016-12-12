<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MasterBuku;

/**
 * MasterBukuSearch represents the model behind the search form about `common\models\MasterBuku`.
 */
class MasterBukuSearch extends MasterBuku
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jumlah_buku'], 'integer'],
            [['edisi', 'pengarang', 'deskripsi', 'penerbit', 'judul', 'bahasa', 'gambar', 'subjek', 'topik'], 'safe'],
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
        $query = MasterBuku::find();

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
            'jumlah_buku' => $this->jumlah_buku,
        ]);

        $query->//andFilterWhere(['like', 'edisi', $this->edisi])
            //->andFilterWhere(['like', 'pengarang', $this->pengarang])
            //->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            //->andFilterWhere(['like', 'penerbit', $this->penerbit])
            andFilterWhere(['like', 'Judul', $this->judul]);
            //->andFilterWhere(['like', 'bahasa', $this->bahasa])
            //->andFilterWhere(['like', 'gambar', $this->gambar])
            //->andFilterWhere(['like', 'subjek', $this->subjek])
            //->andFilterWhere(['like', 'topik', $this->topik]);

        return $dataProvider;
    }
}
