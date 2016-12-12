<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "t_kategori_denda".
 *
 * @property integer $id
 * @property string $jenis_kategori
 * @property double $denda_per_hari
 *
 * @property TDPemesanan[] $tDPemesanans
 * @property TDPeminjaman[] $tDPeminjamen
 */
class KategoriDenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_kategori_denda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_kategori', 'denda_per_hari'], 'required'],
            [['denda_per_hari'], 'number'],
            [['jenis_kategori'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_kategori' => 'Jenis Kategori',
            'denda_per_hari' => 'Denda Per Hari',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDPemesanans()
    {
        return $this->hasMany(TDPemesanan::className(), ['id_referensi_kategori' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDPeminjamen()
    {
        return $this->hasMany(TDPeminjaman::className(), ['id_referensi_kategori' => 'id']);
    }
}
