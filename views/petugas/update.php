<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Petugas $model */

$this->title = 'Update Petugas: ' . $model->id_petugas;
$this->params['breadcrumbs'][] = ['label' => 'Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_petugas, 'url' => ['view', 'id_petugas' => $model->id_petugas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="petugas-update text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
