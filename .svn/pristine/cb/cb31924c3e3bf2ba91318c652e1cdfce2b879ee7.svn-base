<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailDenda;

/**
 * DetailDendaSearch represents the model behind the search form about `common\models\DetailDenda`.
 */
class DetailDendaSearch extends DetailDenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_detail_peminjaman'], 'integer'],
            [['besar_denda'], 'number'],
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
        $query = DetailDenda::find();

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
            'besar_denda' => $this->besar_denda,
            'id_detail_peminjaman' => $this->id_detail_peminjaman,
        ]);

        return $dataProvider;
    }
}
