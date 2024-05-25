<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BukuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="buku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_buku') ?>

    <?= $form->field($model, 'kode_buku') ?>

    <?= $form->field($model, 'judul_buku') ?>

    <?= $form->field($model, 'penulis_buku') ?>

    <?= $form->field($model, 'penerbit_buku') ?>

    <?php // echo $form->field($model, 'tahun_penerbit') ?>

    <?php // echo $form->field($model, 'stok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
