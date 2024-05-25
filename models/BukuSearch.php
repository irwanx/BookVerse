<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Buku;

/**
 * BukuSearch represents the model behind the search form of `app\models\Buku`.
 */
class BukuSearch extends Buku
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_buku', 'stok'], 'integer'],
            [['kode_buku', 'judul_buku', 'penulis_buku', 'penerbit_buku', 'tahun_penerbit'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Buku::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_buku' => $this->id_buku,
            'stok' => $this->stok,
        ]);

        $query->andFilterWhere(['like', 'kode_buku', $this->kode_buku])
            ->andFilterWhere(['like', 'judul_buku', $this->judul_buku])
            ->andFilterWhere(['like', 'penulis_buku', $this->penulis_buku])
            ->andFilterWhere(['like', 'penerbit_buku', $this->penerbit_buku])
            ->andFilterWhere(['like', 'tahun_penerbit', $this->tahun_penerbit]);

        return $dataProvider;
    }
}
