<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rak".
 *
 * @property int $id_rak
 * @property string $nama_rak
 * @property string $lokasi_rak
 * @property int $id_buku
 *
 * @property Buku $buku
 */
class Rak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_rak', 'lokasi_rak', 'id_buku'], 'required'],
            [['id_buku'], 'integer'],
            [['nama_rak', 'lokasi_rak'], 'string', 'max' => 50],
            [['id_buku'], 'exist', 'skipOnError' => true, 'targetClass' => Buku::class, 'targetAttribute' => ['id_buku' => 'id_buku']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rak' => 'Id Rak',
            'nama_rak' => 'Nama Rak',
            'lokasi_rak' => 'Lokasi Rak',
            'id_buku' => 'Id Buku',
        ];
    }

    /**
     * Gets query for [[Buku]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuku()
    {
        return $this->hasOne(Buku::className(), ['id_buku' => 'id_buku']);
    }
}
