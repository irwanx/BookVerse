<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AnggotaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="anggota-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_anggota') ?>

    <?= $form->field($model, 'kode_anggota') ?>

    <?= $form->field($model, 'nama_anggota') ?>

    <?= $form->field($model, 'jk_anggota') ?>

    <?= $form->field($model, 'jurusan_anggota') ?>

    <?php // echo $form->field($model, 'no_telp_anggota') ?>

    <?php // echo $form->field($model, 'alamat_anggota') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
