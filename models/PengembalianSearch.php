<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengembalian;

/**
 * PengembalianSearch represents the model behind the search form of `app\models\Pengembalian`.
 */
class PengembalianSearch extends Pengembalian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengembalian', 'denda', 'id_buku', 'id_anggota', 'id_petugas'], 'integer'],
            [['tanggal_pengembalian'], 'safe'],
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
        $query = Pengembalian::find();

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
            'id_pengembalian' => $this->id_pengembalian,
            'tanggal_pengembalian' => $this->tanggal_pengembalian,
            'denda' => $this->denda,
            'id_buku' => $this->id_buku,
            'id_anggota' => $this->id_anggota,
            'id_petugas' => $this->id_petugas,
        ]);

        return $dataProvider;
    }
}
