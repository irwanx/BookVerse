<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property int $id_petugas
 * @property string $nama_petugas
 * @property string $jabatan_petugas
 * @property string $no_telp_petugas
 * @property string $alamat_petugas
 *
 * @property Peminjaman[] $peminjamen
 * @property Pengembalian[] $pengembalians
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_petugas', 'jabatan_petugas', 'no_telp_petugas', 'alamat_petugas'], 'required'],
            [['nama_petugas', 'jabatan_petugas'], 'string', 'max' => 50],
            [['no_telp_petugas'], 'string', 'max' => 13],
            [['alamat_petugas'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_petugas' => 'Id Petugas',
            'nama_petugas' => 'Nama Petugas',
            'jabatan_petugas' => 'Jabatan Petugas',
            'no_telp_petugas' => 'No Telp Petugas',
            'alamat_petugas' => 'Alamat Petugas',
        ];
    }

    /**
     * Gets query for [[Peminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::class, ['id_petugas' => 'id_petugas']);
    }

    /**
     * Gets query for [[Pengembalians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalians()
    {
        return $this->hasMany(Pengembalian::class, ['id_petugas' => 'id_petugas']);
    }
}
