<?php

use app\models\Anggota;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AnggotaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Anggota';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-index text-color-500">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambahkan Anggota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-primary table-striped'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_anggota',
            'kode_anggota',
            'nama_anggota',
            'jk_anggota',
            'jurusan_anggota',
            //'no_telp_anggota',
            //'alamat_anggota',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Anggota $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_anggota' => $model->id_anggota]);
                }
            ],
        ],
    ]); ?>


</div>