<?php

namespace backend\models;

use common\models\PesanPinjam;
use common\models;
use Yii;
use common\models\Peminjaman;

class Kembali extends \yii\base\Model {

    public $id_bahan_pustaka;

    public function rules() {
        return [
            [['id_bahan_pustaka'], 'string'],
        ];
    }

    public function attributeLabels() {
        return [
            'id_bahan_pustaka' => 'Id Bahan Pustaka',
        ];
    }

    public function Peminjaman() {

            $pesan_pinjam = Peminjaman::find()->where(['id_d_buku'=>$this->id_bahan_pustaka])->count();
            $pesan_pinjakaset = Peminjaman::find()->where(['id_d_kaset'=>$this->id_bahan_pustaka])->count();
            
            $buku = models\DetailBuku::find()->where(['id_buku' => $this->id_bahan_pustaka])->count();
            $kaset = models\DetailKaset::find()->where(['id_kaset' => $this->id_bahan_pustaka])->count();

            if ($pesan_pinjam == 0 && $pesan_pinjakaset == 0) {
                Yii::$app->session->setFlash('danger', 'buku/kaset  tidak ditemukan');
            } else {
                $peminjaman;
                if ($pesan_pinjam > 0) {
                    $peminjaman = Peminjaman::findOne(['id_d_buku'=>$this->id_bahan_pustaka,'acc2'=>NULL]);
                    $buku = models\DetailBuku::findOne(['id_buku' => $this->id_bahan_pustaka]);
                    $buku->availability = 1;
                    $buku->save();
                }
                if ($pesan_pinjakaset > 0) {
                    $peminjaman = Peminjaman::findOne(['id_d_kaset'=>$this->id_bahan_pustaka,'acc2'=>NULL]);
                    $kaset = models\DetailKaset::findOne(['id_kaset' => $this->id_bahan_pustaka]);
                    $kaset->availability = 1;
                    $kaset->save();
                }
                              
                $peminjaman->tgl_kembali = date('Y-m-d H:m:s');
                $peminjaman->acc2 = Yii::$app->user->id;
                
//                $time2 = strtotime($peminjaman->tgl_kembali);
//                $time = strtotime($peminjaman->rencana_kembali);
//                
//                $peminjaman->denda = ($time2-$time)*($peminjaman->idReferensiKategori->denda_per_hari);

                if ($peminjaman->save()) {
                    return $peminjaman;
                }
                
                
            }
//        }
    }
}

?>