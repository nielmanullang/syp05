<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "t_m_kaset".
 *
 * @property integer $id
 * @property string $judul
 * @property integer $jumlah
 * @property string $keterangan
 * @property integer $jenis
 * @property string $gambar
 * @property string $subjek
 * @property string $prodi_pemilik
 *
 * @property TDKaset[] $tDKasets
 * @property TRJenis $jenis0
 */
class MasterKaset extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName() {
        return 't_m_kaset';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'judul', 'jumlah'], 'required'],
            [['jumlah', 'jenis'], 'integer'],
            [['keterangan', 'prodi_pemilik'], 'string'],
            [['judul', 'subjek'], 'string', 'max' => 255],
            [['gambar'], 'string', 'max' => 45],
            [['file'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'Id Master Kaset',
            'judul' => 'Judul',
            'jumlah' => 'Jumlah',
            'keterangan' => 'Keterangan',
            'jenis' => 'Jenis',
            'gambar' => 'Gambar',
            'subjek' => 'Subjek',
            'prodi_pemilik' => 'Prodi Pemilik',
            'file' => 'Gambar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDKasets() {
        return $this->hasMany(TDKaset::className(), ['id_master_kaset' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenis0() {
        return $this->hasOne(TRJenis::className(), ['id' => 'jenis']);
    }

}