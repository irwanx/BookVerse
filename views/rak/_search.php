<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\RaknSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rak-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rak') ?>

    <?= $form->field($model, 'nama_rak') ?>

    <?= $form->field($model, 'lokasi_rak') ?>

    <?= $form->field($model, 'id_buku') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
