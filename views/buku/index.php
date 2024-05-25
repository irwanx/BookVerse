<?php

use app\models\Buku;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BukuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambahkan Buku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-primary table-striped'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_buku',
            'kode_buku',
            'judul_buku',
            'penulis_buku',
            'penerbit_buku',
            //'tahun_penerbit',
            //'stok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Buku $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_buku' => $model->id_buku]);
                }
            ],
        ],
    ]); ?>


</div>