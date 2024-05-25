<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Peminjaman $model */

$this->title = 'Update Peminjaman: ' . $model->id_peminjaman;
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_peminjaman, 'url' => ['view', 'id_peminjaman' => $model->id_peminjaman]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-update text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
