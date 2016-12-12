<?php

namespace common\models;

use Yii;
use common\models\Jenis;

/**
 * This is the model class for table "t_d_pemesanan".
 *
 * @property integer $id
 * @property integer $id_status
 * @property string $tgl_ganti_status
 * @property integer $id_referensi_kategori
 * @property integer $id_trans_pemesanan
 * @property string $id_d_buku
 * @property string $id_d_kaset
 * @property string $tgl_pemeritahuan
 * @property integer $acc1
 *
 * @property TRKategori $idReferensiKategori
 * @property TTPesanPinjam $idTransPemesanan
 * @property TDBuku $idDBuku
 * @property TDKaset $idDKaset
 * @property TRJenis $idStatus
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_d_pemesanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_status', 'id_referensi_kategori', 'id_trans_pemesanan'], 'required'],
            [['id_status', 'id_referensi_kategori', 'id_trans_pemesanan', 'acc1', 'acc2'], 'integer'],
            [['tgl_ganti_status', 'tgl_pemeritahuan'], 'safe'],
            [['id_d_buku', 'id_d_kaset'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_status' => 'Id Status',
            'tgl_ganti_status' => 'Tgl Ganti Status',
            'id_referensi_kategori' => 'Id Referensi Kategori',
            'id_trans_pemesanan' => 'Id Trans Pemesanan',
            'id_d_buku' => 'ID Buku',
            'id_d_kaset' => 'ID Kaset',
            'tgl_pemeritahuan' => 'Tgl Pemeritahuan',
            'acc1' => 'Acc1',
            'acc2' => 'Acc2',
            ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdReferensiKategori()
    {
        return $this->hasOne(TRKategori::className(), ['id' => 'id_referensi_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransPemesanan()
    {
        return $this->hasOne(TTPesanPinjam::className(), ['id' => 'id_trans_pemesanan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDBuku()
    {
        return $this->hasOne(TDBuku::className(), ['id' => 'id_d_buku']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDKaset()
    {
        return $this->hasOne(TDKaset::className(), ['id' => 'id_d_kaset']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdStatus()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'id_status']);
    }
}
