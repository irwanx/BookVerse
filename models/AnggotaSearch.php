<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anggota;

/**
 * AnggotaSearch represents the model behind the search form of `app\models\Anggota`.
 */
class AnggotaSearch extends Anggota
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota'], 'integer'],
            [['kode_anggota', 'nama_anggota', 'jk_anggota', 'jurusan_anggota', 'no_telp_anggota', 'alamat_anggota'], 'safe'],
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
        $query = Anggota::find();

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
            'id_anggota' => $this->id_anggota,
        ]);

        $query->andFilterWhere(['like', 'kode_anggota', $this->kode_anggota])
            ->andFilterWhere(['like', 'nama_anggota', $this->nama_anggota])
            ->andFilterWhere(['like', 'jk_anggota', $this->jk_anggota])
            ->andFilterWhere(['like', 'jurusan_anggota', $this->jurusan_anggota])
            ->andFilterWhere(['like', 'no_telp_anggota', $this->no_telp_anggota])
            ->andFilterWhere(['like', 'alamat_anggota', $this->alamat_anggota]);

        return $dataProvider;
    }
}
