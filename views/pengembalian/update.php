<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pengembalian $model */

$this->title = 'Update Pengembalian: ' . $model->id_pengembalian;
$this->params['breadcrumbs'][] = ['label' => 'Pengembalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengembalian, 'url' => ['view', 'id_pengembalian' => $model->id_pengembalian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengembalian-update text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
