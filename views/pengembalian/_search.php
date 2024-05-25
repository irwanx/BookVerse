<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PengembalianSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengembalian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pengembalian') ?>

    <?= $form->field($model, 'tanggal_pengembalian') ?>

    <?= $form->field($model, 'denda') ?>

    <?= $form->field($model, 'id_buku') ?>

    <?= $form->field($model, 'id_anggota') ?>

    <?php // echo $form->field($model, 'id_petugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
