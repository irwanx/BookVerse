<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id_buku
 * @property string $kode_buku
 * @property string $judul_buku
 * @property string $penulis_buku
 * @property string $penerbit_buku
 * @property string $tahun_penerbit
 * @property int $stok
 *
 * @property Peminjaman[] $peminjamen
 * @property Pengembalian[] $pengembalians
 * @property Rak[] $raks
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_buku', 'judul_buku', 'penulis_buku', 'penerbit_buku', 'tahun_penerbit', 'stok'], 'required'],
            [['stok'], 'integer'],
            [['kode_buku'], 'string', 'max' => 5],
            [['judul_buku', 'penulis_buku', 'penerbit_buku'], 'string', 'max' => 50],
            [['tahun_penerbit'], 'string', 'max' => 4],
            [['kode_buku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_buku' => 'Id Buku',
            'kode_buku' => 'Kode Buku',
            'judul_buku' => 'Judul Buku',
            'penulis_buku' => 'Penulis Buku',
            'penerbit_buku' => 'Penerbit Buku',
            'tahun_penerbit' => 'Tahun Penerbit',
            'stok' => 'Stok',
        ];
    }

    /**
     * Gets query for [[Peminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::class, ['id_buku' => 'id_buku']);
    }

    /**
     * Gets query for [[Pengembalians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalians()
    {
        return $this->hasMany(Pengembalian::class, ['id_buku' => 'id_buku']);
    }

    /**
     * Gets query for [[Raks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRaks()
    {
        return $this->hasMany(Rak::class, ['id_buku' => 'id_buku']);
    }
}
