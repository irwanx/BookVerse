<?php

namespace app\controllers;

use app\models\Rak;
use app\models\RaknSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RakController implements the CRUD actions for Rak model.
 */
class RakController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Rak models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RaknSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rak model.
     * @param int $id_rak Id Rak
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_rak)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_rak),
        ]);
    }

    /**
     * Creates a new Rak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Rak();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_rak' => $model->id_rak]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Rak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_rak Id Rak
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_rak)
    {
        $model = $this->findModel($id_rak);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_rak' => $model->id_rak]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Rak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_rak Id Rak
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_rak)
    {
        $this->findModel($id_rak)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_rak Id Rak
     * @return Rak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_rak)
    {
        if (($model = Rak::findOne(['id_rak' => $id_rak])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
