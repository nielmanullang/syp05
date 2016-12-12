<?php

namespace common\models;

use Yii;
use common\models\MasterKaset;

/**
 * This is the model class for table "t_d_kaset".
 *
 * @property string $id_kaset
 * @property string $cp_or
 * @property integer $id_master_kaset
 * @property integer $status
 * @property string $tgl_masuk
 * @property string $sumber
 * @property string $lokasi
 * @property string $klasifikasi
 * @property string $jenis
 * @property string $isbn
 * @property string $sifat
 * @property integer $availability
 *
 * @property TMKaset $idMasterKaset
 * @property TRJenis $status0
 * @property TDPemesanan[] $tDPemesanans
 * @property TDPeminjaman[] $tDPeminjamen
 */
class DetailKaset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_d_kaset';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kaset', 'cp_or', 'id_master_kaset'], 'required'],
            [['cp_or'], 'string'],
            [['id_master_kaset', 'status', 'availability'], 'integer'],
            [['tgl_masuk'], 'safe'],
            [['id_kaset', 'isbn'], 'string', 'max' => 15],
            [['sumber', 'jenis'], 'string', 'max' => 255],
            [['lokasi', 'sifat'], 'string', 'max' => 125],
            [['klasifikasi'], 'string', 'max' => 25],
            [['id_kaset'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kaset' => 'Id Kaset',
            'cp_or' => 'Copy/Original',
            'id_master_kaset' => 'Id Master Kaset',
            'status' => 'Status',
            'tgl_masuk' => 'Tangal Masuk',
            'sumber' => 'Sumber',
            'lokasi' => 'Lokasi',
            'klasifikasi' => 'Klasifikasi',
            'jenis' => 'Jenis',
            'isbn' => 'Isbn',
            'sifat' => 'Sifat',
            'availability' => 'Availability',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMasterKaset()
    {
        return $this->hasOne(MasterKaset::className(), ['id' => 'id_master_kaset']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(TRJenis::className(), ['id' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDPemesanans()
    {
        return $this->hasMany(TDPemesanan::className(), ['id_d_kaset' => 'id_kaset']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDPeminjamen()
    {
        return $this->hasMany(TDPeminjaman::className(), ['id_d_kaset' => 'id_kaset']);
    }
}
