<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Peminjaman $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal_pinjam')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tanggal_kembali')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'id_buku')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Buku::find()->all(), 'id_buku', 'judul_buku'),
        ['prompt' => 'Pilih Buku']
    )->label('Judul Buku') ?>

    <?= $form->field($model, 'id_anggota')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Anggota::find()->all(), 'id_anggota', 'nama_anggota'),
        ['prompt' => 'Pilih Anggota']
    )->label('Nama Anggota') ?>

    <?= $form->field($model, 'id_petugas')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Petugas::find()->all(), 'id_petugas', 'nama_petugas'),
        ['prompt' => 'Pilih Petugas']
    )->label('Nama Petugas') ?>


    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>