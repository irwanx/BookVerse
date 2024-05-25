<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Petugas $model */

$this->title = 'Tambahkan Petugas';
$this->params['breadcrumbs'][] = ['label' => 'Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="petugas-create text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
