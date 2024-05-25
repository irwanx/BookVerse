<?php

use app\models\Pengembalian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PengembalianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengembalian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengembalian-index text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambahkan Pengembalian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-primary table-striped'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pengembalian',
            'tanggal_pengembalian',
            'denda',
            'buku.judul_buku',
            'anggota.nama_anggota',
            //'id_petugas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pengembalian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pengembalian' => $model->id_pengembalian]);
                }
            ],
        ],
    ]); ?>


</div>