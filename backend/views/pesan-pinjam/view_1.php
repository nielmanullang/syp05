<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Peminjaman */

$this->title = 'Pengembalian Bahan Pustaka';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php
$tgl_hari_ini = new DateTime(date("Y-m-d"));
$tgl_kembali = new DateTime($model->rencana_kembali);

$jumlah_selisih = $tgl_kembali->diff($tgl_hari_ini)->days;
$denda = 0;

$buku = $model->id_d_buku;
?>
<br>

<div class="box box-widget">
    <div class='box-header with-border'>
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                ID Bahan Pustaka &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $model->id_d_buku ?>
                <?= $model->id_d_kaset ?> <br>
                Judul Bahan Pustaka &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  
                <?php
                if ($model->id_d_kaset == null) {
                    echo $model->idDBuku->idMasterBuku->judul;
                } else {
                    echo $model->idDKaset->idMasterKaset->judul;
                }
                ?>
                <br>
                Nama Peminjam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $model->idTransPeminjaman->idPengguna->nama ?><br>
                Nomor Induk Peminjam : <?= $model->idTransPeminjaman->idPengguna->NI ?>
                <?php
                if ($tgl_hari_ini > $tgl_kembali) {
                    $denda = ($jumlah_selisih * $model->idReferensiKategori->denda_per_hari);
                    ?>
                    <h2>Denda = Rp. <?= $denda ?>,00</h2>
                    <br>
                    <?php
                } else {
                    echo'<h3>Denda = Rp. 0,00</h3>';
                }
                ?>

                <?php if ($model->id_d_kaset == null) { ?>   
                    <?= Html::a('Kembalikan Buku', ['pesan-pinjam/pengembalian', 'id' => $model->id, 'denda' => $denda, 'idBahanPustaka' => $model->id_d_buku], ['class' => 'btn btn-primary']) ?>
                <?php } else {
                    ?> <?php echo Html::a('Kembalikan CD/DVD', ['pesan-pinjam/pengembalian', 'id' => $model->id, 'denda' => $denda, 'idBahanPustaka' => $model->id_d_kaset], ['class' => 'btn btn-primary']) ?>
<?php } ?>
            </div><!-- /.col -->

        </div>
        <!-- info row -->
    </div>
</div>
