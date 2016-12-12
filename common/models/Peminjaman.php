<?php

namespace common\models;

use Yii;
use common\models\PesanPinjam;
use common\models\DetailKaset;
use common\models\DetailBuku;
/**
 * This is the model class for table "t_d_peminjaman".
 *
 * @property integer $id
 * @property string $tgl_kembali
 * @property string $rencana_kembali
 * @property integer $id_trans_peminjaman
 * @property integer $id_referensi_kategori
 * @property string $id_d_buku
 * @property string $id_d_kaset
 * @property integer $acc1
 * @property integer $acc2
 *
 * @property TDDenda[] $tDDendas
 * @property TRKategori $idReferensiKategori
 * @property TTPesanPinjam $idTransPeminjaman
 * @property TDKaset $idDKaset
 * @property TDBuku $idDBuku
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_d_peminjaman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl_kembali', 'rencana_kembali'], 'safe'],
            [['id_trans_peminjaman', 'id_referensi_kategori', 'acc1', 'acc2'], 'integer'],
            [['id_d_buku', 'id_d_kaset'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tgl_kembali' => 'Tgl Kembali',
            'rencana_kembali' => 'Rencana Kembali',
            'id_trans_peminjaman' => 'Id Trans Peminjaman',
            'id_referensi_kategori' => 'Id Referensi Kategori',
            'id_d_buku' => 'ID Buku',
            'id_d_kaset' => 'ID Kaset',
            'acc1' => 'Acc1',
            'acc2' => 'Acc2'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDDendas()
    {
        return $this->hasMany(TDDenda::className(), ['id_detail_peminjaman' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdReferensiKategori()
    {
        return $this->hasOne(KategoriDenda::className(), ['id' => 'id_referensi_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTransPeminjaman()
    {
        return $this->hasOne(PesanPinjam::className(), ['id' => 'id_trans_peminjaman']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDKaset()
    {
        return $this->hasOne(DetailKaset::className(), ['id_kaset' => 'id_d_kaset']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDBuku()
    {
        return $this->hasOne(DetailBuku::className(), ['id_buku' => 'id_d_buku']);
    }
}
