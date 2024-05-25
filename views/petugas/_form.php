<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Petugas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="petugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_petugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan_petugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp_petugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_petugas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan Petugas', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
