<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\KategoriDenda;

/**
 * KategoriDendaSearch represents the model behind the search form about `common\models\KategoriDenda`.
 */
class KategoriDendaSearch extends KategoriDenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['jenis_kategori'], 'safe'],
            [['denda_per_hari'], 'number'],
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
        $query = KategoriDenda::find();

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
            'denda_per_hari' => $this->denda_per_hari,
        ]);

        $query->andFilterWhere(['like', 'jenis_kategori', $this->jenis_kategori]);

        return $dataProvider;
    }
}
