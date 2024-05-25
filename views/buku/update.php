<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */

$this->title = 'Update Buku: ' . $model->id_buku;
$this->params['breadcrumbs'][] = ['label' => 'Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_buku, 'url' => ['view', 'id_buku' => $model->id_buku]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="buku-update text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
