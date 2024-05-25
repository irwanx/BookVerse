<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property int $id_anggota
 * @property string $kode_anggota
 * @property string $nama_anggota
 * @property string $jk_anggota
 * @property string $jurusan_anggota
 * @property string $no_telp_anggota
 * @property string $alamat_anggota
 *
 * @property Peminjaman[] $peminjamen
 * @property Pengembalian[] $pengembalians
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_anggota', 'nama_anggota', 'jk_anggota', 'jurusan_anggota', 'no_telp_anggota', 'alamat_anggota'], 'required'],
            [['kode_anggota'], 'string', 'max' => 9],
            [['nama_anggota', 'alamat_anggota'], 'string', 'max' => 100],
            [['jk_anggota'], 'string', 'max' => 1],
            [['jurusan_anggota'], 'string', 'max' => 2],
            [['no_telp_anggota'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anggota' => 'Id Anggota',
            'kode_anggota' => 'Kode Anggota',
            'nama_anggota' => 'Nama Anggota',
            'jk_anggota' => 'Jk Anggota',
            'jurusan_anggota' => 'Jurusan Anggota',
            'no_telp_anggota' => 'No Telp Anggota',
            'alamat_anggota' => 'Alamat Anggota',
        ];
    }

    /**
     * Gets query for [[Peminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::class, ['id_anggota' => 'id_anggota']);
    }

    /**
     * Gets query for [[Pengembalians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalians()
    {
        return $this->hasMany(Pengembalian::class, ['id_anggota' => 'id_anggota']);
    }
}
