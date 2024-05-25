<?php

/* @var $this yii\web\View */

$this->title = 'BookVerse';
?>
<section class="d-flex flex-column justify-content-center align-items-center text-center vh-100" style="background-image: url('assets/e7db5b0c/home.png'); background-size: cover; background-position: right;">
    <div class="bg-dark position-absolute w-100 vh-100" style="opacity: 0.5;"></div>
    <div class="container position-relative">
        <div class="position-relative text-white py-5">
            <h1>Selamat Datang di BookVerse</h1>
            <p class="lead">Perpustakaan Online Anda</p>
            <p>
                <a href="#" class="btn btn-secondary bg-color-400 my-2">Lihat Buku</a>
                <a href="#" class="btn btn-secondary bg-color-500 my-2">Kontak Kami</a>
            </p>
        </div>
    </div>
</section>



<div class="album py-5 bg-color-10">
    <div class="container">

        <div class="row">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm bg-color-50 text-color-500">
                        <img class="bd-placeholder-img card-img-top" src="assets/e7db5b0c/buku-1.webp" alt="Placeholder: Thumbnail" width="125" height="auto">
                        <div class="card-body">
                            <p class="card-text">Dia Adalah Kakakku</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary text-color-500">Lihat</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary text-color-500">Simpan</button>
                                </div>
                                <small class="text-color-500">Tere Liye</small>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endfor; ?>
        </div>
    </div>
</div>