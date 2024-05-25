<?php

use app\models\Rak;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RaknSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rak';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rak-index text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambahkan Rak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-primary table-striped'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_rak',
            'nama_rak',
            'lokasi_rak',
            'buku.judul_buku',
            'buku.penulis_buku',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Rak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_rak' => $model->id_rak]);
                }
            ],
        ],
    ]); ?>


</div>