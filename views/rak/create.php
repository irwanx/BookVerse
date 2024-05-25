<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Rak $model */

$this->title = 'Tambahkan Rak';
$this->params['breadcrumbs'][] = ['label' => 'Rak', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rak-create text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
