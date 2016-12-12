<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MasterArtikel;

/**
 * MasterArtikelSearch represents the model behind the search form about `common\models\MasterArtikel`.
 */
class MasterArtikelSearch extends MasterArtikel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_pengguna', 'jumlah_lihat'], 'integer'],
            [['judul', 'isi', 'tgl_mulai'], 'safe'],
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
        $query = MasterArtikel::find();

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
            'tgl_mulai' => $this->tgl_mulai,
            'id_pengguna' => $this->id_pengguna,
            'jumlah_lihat' => $this->jumlah_lihat,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'isi', $this->isi]);

        return $dataProvider;
    }
}
