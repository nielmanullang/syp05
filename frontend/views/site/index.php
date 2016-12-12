<?php
/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\widgets\ListView;
use yii\helpers\Html;

//$this->title = 'Online Library Information System';
//
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">
    <div class="col-md-7">
        <div class="testimonial" style="padding-left:30px ;background-color:rgba(255, 255, 255, 0.65);" >
            <h1 align="center" style="color:#085A8A"><b>Pengumuman </b></h1>
            <div class="media-body">                
                <?=
                                            ListView::widget([
                                                'dataProvider' => $dataProvider,
                                                'itemView' => '_view1',
                                                'summary' => '',
                                            ]);
                  ?>
            </div>
        </div>
        <div class="testimonial" style="background-color:rgba(255, 255, 255, 0.65);">
            <h1 align="center" style="padding-left:48px; color:#085A8A;"><b>Artikel </b></h1>
            <table class="responsive">
                <div class="media-body"> 
                    <?=
                                                ListView::widget([
                                                    'dataProvider' => $dataProviderArtikel,
                                                    'itemView' => '_viewArtikel',
                                                    'summary' => '',
                                                ]);
                      ?>
                </div>
            </table>
        </div>
    </div>
    <div class="col-md-5">
        <h2 align="left" style="padding-left:15px; color:#085A8A"><b>Buku Terbaru</b> </h2>
		<div class="testimonial">
        <?=
                                            ListView::widget([
                                                'dataProvider' => $dataProviderBuku,
                                                'itemView' => '_view2',
                                                'summary' => '',
                                            ]);
                  ?>
        </div>
        <br><br>
        <div class="col-md-9 panel" style="margin-top: 20px;"> 
            <h4 style="color:#fff"><b><div class="featured_slider horizontal-slide clearfix">Jam Buka Perpustakaan</div></b></h4>
            <b>Masa Reguler:</b><br>
            Senin-Jumat : 08.00 - 21.30<br>
            Sabtu : 08.00 - 12.00<br>
            Minggu : Libur
            <br><br> 
            <b>Masa Libur Semester:</b><br>
            Senin-Jumat : 08.00 - 16.30<br>
            Sabtu : 08.00 - 12.00<br>
            Minggu : Libur
            <br><br>
            <b>Kontak:</b><br>
            <a href="#">library@del.ac.id</a>
            <br><br>
            <b>Alamat:</b><br>
            Institut Teknologi Del<br>
            Jl. Sisingamangaraja Desa Sitoluama Kecamatan Laguboti<br>
            Toba Samosir 22381
            
        </div>
        <br><br>
        <div class="col-md-9 panel" style="margin-top: 20px;"> 
            <h4 style="color:#fff"><b><div class="featured_slider horizontal-slide clearfix">Link-Link Terkait</div></b></h4>
            <b>Program Studi</b><br>
            <a href="#">Diploma-3 Teknik Informatika</a><br>
            <a href="#">Diploma-3 Teknik Komputer</a><br>
            <a href="#">Diploma-4 Teknik Informatika</a><br>
            <a href="#">Strata-1 Teknik Informatika</a><br>
            <a href="#">Strata-1 Sistem Informasi</a><br>
            <a href="#">Strata-1 Teknik Elektro</a><br>
            <a href="#">Strata-1 Manajemen Rekayasa</a><br>
            <a href="#">Strata-1 Teknik Bioproses</a><br>

            <br><br> 
            <b>Lainnya</b><br>
            <a href="http://cis.del.ac.id">Campus Information System Del</a><br>
            <a href="http://moodle.del.ac.id">Moodle IT-Del</a><br>
            <a href="#">Alumni IT-Del</a><br>
            <a href="#">Giving IT-Del</a><br>
        </div>
        <div class="col-md-9 panel" style="margin-top: 20px;"> 
            <h4 style="color:#fff"><b><div class="featured_slider horizontal-slide clearfix">Jenis Layanan Perpustakaan</div></b></h4>
            1. Layanan peminjaman bahan pustaka<br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Layanan Peminjaman Buku<br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Layanan Peminjaman CD<br>
            2.  Layanan Unduh Artikel Jurnal<br>
            3.  Layanan Surat Bebas Pustaka dan <br>&nbsp;&nbsp;&nbsp;&nbsp;Berita Acara Serah Terima Publikasi<br>
            4.  Layanan Cetak Dokumen<br>
            5.  Layanan Scan<br>
        </div>
    </div>
</div>