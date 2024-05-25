<?php

use app\models\Peminjaman;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PeminjamanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambahkan Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-primary table-striped'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_peminjaman',
            'anggota.nama_anggota',
            'buku.judul_buku',
            'tanggal_pinjam',
            'tanggal_kembali',
            //'id_petugas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Peminjaman $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_peminjaman' => $model->id_peminjaman]);
                }
            ],
        ],
    ]); ?>


</div>