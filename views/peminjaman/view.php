<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Peminjaman $model */

$this->title = $model->id_peminjaman;
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="peminjaman-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_peminjaman' => $model->id_peminjaman], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_peminjaman' => $model->id_peminjaman], [
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
            'id_peminjaman',
            'tanggal_pinjam',
            'tanggal_kembali',
            'id_buku',
            'id_anggota',
            'id_petugas',
        ],
        'options' => ['class' => 'table table-primary table-striped'],
    ]) ?>

</div>