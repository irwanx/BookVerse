<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Rak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_rak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_rak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_buku')->dropDownList(
            \yii\helpers\ArrayHelper::map(\app\models\Buku::find()->all(), 'id_buku', 'judul_buku'),
            ['prompt'=>'Pilih Buku']
        )->label('Judul Buku') ?>


    <div class="form-group">
        <?= Html::submitButton('Simpan Rak', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
