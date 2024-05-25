<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pengembalian $model */

$this->title = 'Tambahkan Pengembalian';
$this->params['breadcrumbs'][] = ['label' => 'Pengembalian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengembalian-create text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
