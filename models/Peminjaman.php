<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property int $id_peminjaman
 * @property string $tanggal_pinjam
 * @property string $tanggal_kembali
 * @property int $id_buku
 * @property int $id_anggota
 * @property int $id_petugas
 *
 * @property Anggota $anggota
 * @property Buku $buku
 * @property Petugas $petugas
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_pinjam', 'tanggal_kembali', 'id_buku', 'id_anggota', 'id_petugas'], 'required'],
            [['tanggal_pinjam', 'tanggal_kembali'], 'safe'],
            [['id_buku', 'id_anggota', 'id_petugas'], 'integer'],
            [['id_buku'], 'exist', 'skipOnError' => true, 'targetClass' => Buku::class, 'targetAttribute' => ['id_buku' => 'id_buku']],
            [['id_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['id_petugas' => 'id_petugas']],
            [['id_anggota'], 'exist', 'skipOnError' => true, 'targetClass' => Anggota::class, 'targetAttribute' => ['id_anggota' => 'id_anggota']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_peminjaman' => 'Id Peminjaman',
            'tanggal_pinjam' => 'Tanggal Pinjam',
            'tanggal_kembali' => 'Tanggal Kembali',
            'id_buku' => 'Id Buku',
            'id_anggota' => 'Id Anggota',
            'id_petugas' => 'Id Petugas',
        ];
    }

    /**
     * Gets query for [[Anggota]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggota()
    {
        return $this->hasOne(Anggota::class, ['id_anggota' => 'id_anggota']);
    }

    /**
     * Gets query for [[Buku]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuku()
    {
        return $this->hasOne(Buku::class, ['id_buku' => 'id_buku']);
    }

    /**
     * Gets query for [[Petugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetugas()
    {
        return $this->hasOne(Petugas::class, ['id_petugas' => 'id_petugas']);
    }

}
