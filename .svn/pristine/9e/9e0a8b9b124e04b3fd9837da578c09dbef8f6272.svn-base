<?php

namespace backend\models;

use common\models\PesanPinjam;
use common\models;
use common\models\Pengguna;
use Yii;
use common\models\Peminjaman;

class Pinjam extends \yii\base\Model {

    public $id_user;
    public $id_bahan_pustaka;

    public function rules() {
        return [
            [['id_user', 'id_bahan_pustaka'], 'string'],
        ];
    }

    public function attributeLabels() {
        return [
            'id_user' => 'Nomor Induk',
            'id_bahan_pustaka' => 'Id Bahan Pustaka',
        ];
    }

    public function Peminjaman() {

        $model_mahasiswas = Pengguna::find()->where(['NI' => $this->id_user])->count();
        $model_aktif = Pengguna::find()->where(['NI' => $this->id_user])->andWhere(['status' => 1])->one();
        if ($model_mahasiswas == 0 && $model_aktif == null) {
            Yii::$app->session->setFlash('danger', 'Pengguna tidak ditemukan');
        } else if ($model_mahasiswas != 0 && $model_aktif == null) {
            Yii::$app->session->setFlash('danger', 'Pengguna tidak aktif'); 
        } else {
            $model_mahasiswa = Pengguna::find()->where(['NI' => $this->id_user])->one();
            $pesan_pinjam = new PesanPinjam();
            $buku = models\DetailBuku::find()->where(['id_buku' => $this->id_bahan_pustaka, 'availability' => 1])->count();
            $buku2 = models\DetailBuku::find()->where(['id_buku' => $this->id_bahan_pustaka, 'availability' => 1])->count();
            $kaset = models\DetailKaset::find()->where(['id_kaset' => $this->id_bahan_pustaka, 'availability' => 1])->count();
            $kaset2 = models\DetailKaset::find()->where(['id_kaset' => $this->id_bahan_pustaka, 'availability' => 1])->count();
            if ($buku == 0 && $kaset == 0) {
                Yii::$app->session->setFlash('danger', 'buku/kaset  tidak ditemukan');
            } else {
                if ($buku > 0) {
                    $pesan_pinjam->id_jenis = 9;
                    $buku = models\DetailBuku::findOne(['id_buku' => $this->id_bahan_pustaka]);
                    $buku->availability = 0;
                    $buku->save();
                }
                if ($kaset > 0) {
                    $pesan_pinjam->id_jenis = 10;
                    $kaset = models\DetailKaset::findOne(['id_kaset' => $this->id_bahan_pustaka]);
                    $kaset->availability = 0;
                    $kaset->save();
                }

                $pesan_pinjam->id_pengguna = $model_mahasiswa->id;
                $pesan_pinjam->jumlah_barang = 1;
                $pesan_pinjam->tgl_transaksi = date('Y-m-d H:m:s');
                $pesan_pinjam->save();

                $peminjaman = new Peminjaman();
                if ($model_aktif->jabatan == "Mahasiswa") {
                    $peminjaman->rencana_kembali = date('Y-m-d', strtotime(date('Y-m-d') . '+7 days'));
                } else {
                    $peminjaman->rencana_kembali = date('Y-m-d', strtotime(date('Y-m-d') . '+14 days'));
                }
                $peminjaman->id_trans_peminjaman = $pesan_pinjam->id;

                if ($buku2 > 0) {
                    $peminjaman->id_referensi_kategori = 1;
                    $peminjaman->id_d_buku = $this->id_bahan_pustaka;
                    $peminjaman->save();
                } else if ($kaset2 > 0) {
                    $peminjaman->id_referensi_kategori = 2;
                    $peminjaman->id_d_kaset = $this->id_bahan_pustaka;
                    $peminjaman->save();
                }
                $peminjaman->acc1 = Yii::$app->user->id;

                if ($peminjaman->save()) {
                    return $pesan_pinjam;
                }
            }
        }
    }
}
?>