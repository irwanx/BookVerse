<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Buku $model */

$this->title = $model->id_buku;
$this->params['breadcrumbs'][] = ['label' => 'Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="buku-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_buku' => $model->id_buku], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_buku' => $model->id_buku], [
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
            'id_buku',
            'kode_buku',
            'judul_buku',
            'penulis_buku',
            'penerbit_buku',
            'tahun_penerbit',
            'stok',
        ],
        'options' => ['class' => 'table table-primary table-striped'],
    ]) ?>

</div>