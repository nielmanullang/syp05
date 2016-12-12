<?php

namespace common\models;

use Yii;
use common\models\Pengguna;

/**
 * This is the model class for table "t_t_pesan_pinjam".
 *
 * @property integer $id
 * @property string $tgl_transaksi
 * @property integer $jumlah_barang
 * @property integer $id_jenis
 * @property integer $id_pengguna
 *
 * @property TDPemesanan[] $tDPemesanans
 * @property TDPeminjaman[] $tDPeminjamen
 * @property TMPengguna $idPengguna
 * @property TRJenis $idJenis
 */
class PesanPinjam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_t_pesan_pinjam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl_transaksi'], 'safe'],
            [['jumlah_barang', 'id_jenis', 'id_pengguna'], 'required'],
            [['jumlah_barang'],'integer'],
            [[ 'id_jenis', 'id_pengguna'], 'integer'] 
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tgl_transaksi' => 'Tgl Transaksi',
            'jumlah_barang' => 'Jumlah Barang',
            'id_jenis' => 'Id Jenis',
            'id_pengguna' => 'Id Pengguna',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDPemesanans()
    {
        return $this->hasOne(Pemesanan::className(), ['id_trans_pemesanan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDPeminjamen()
    {
        return $this->hasMany(TDPeminjaman::className(), ['id_trans_peminjaman' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPengguna()
    {
        return $this->hasOne(Pengguna::className(), ['id' => 'id_pengguna']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJenis()
    {
        return $this->hasOne(TRJenis::className(), ['id' => 'id_jenis']);
    }
}