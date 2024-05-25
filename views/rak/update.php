<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Rak $model */

$this->title = 'Update Rak: ' . $model->id_rak;
$this->params['breadcrumbs'][] = ['label' => 'Raks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rak, 'url' => ['view', 'id_rak' => $model->id_rak]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rak-update text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
