<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pengembalian $model */

$this->title = $model->id_pengembalian;
$this->params['breadcrumbs'][] = ['label' => 'Pengembalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengembalian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pengembalian' => $model->id_pengembalian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pengembalian' => $model->id_pengembalian], [
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
            'id_pengembalian',
            'tanggal_pengembalian',
            'denda',
            'id_buku',
            'id_anggota',
            'id_petugas',
        ],
        'options' => ['class' => 'table table-primary table-striped'],
    ]) ?>

</div>