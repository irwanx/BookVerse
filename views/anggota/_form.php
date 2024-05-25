<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Anggota $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_anggota')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan Anggota', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
