<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Rak $model */

$this->title = $model->id_rak;
$this->params['breadcrumbs'][] = ['label' => 'Raks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_rak' => $model->id_rak], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_rak' => $model->id_rak], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_rak',
            'nama_rak',
            'lokasi_rak',
            'id_buku',
        ],
        'options' => ['class' => 'table table-primary table-striped'],
    ]) ?>

</div>