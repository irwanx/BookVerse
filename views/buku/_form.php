<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penulis_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penerbit_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_penerbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan Buku', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
