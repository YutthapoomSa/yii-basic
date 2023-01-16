<?php

namespace app\controllers;

use app\models\SubMenu;
use app\models\SubMenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubMenuController implements the CRUD actions for SubMenu model.
 */
class SubMenuController extends Controller
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
     * Lists all SubMenu models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SubMenuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SubMenu model.
     * @param int $submenu_id Submenu ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($submenu_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($submenu_id),
        ]);
    }

    /**
     * Creates a new SubMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SubMenu();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'submenu_id' => $model->submenu_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SubMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $submenu_id Submenu ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($submenu_id)
    {
        $model = $this->findModel($submenu_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'submenu_id' => $model->submenu_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SubMenu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $submenu_id Submenu ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($submenu_id)
    {
        $this->findModel($submenu_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SubMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $submenu_id Submenu ID
     * @return SubMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($submenu_id)
    {
        if (($model = SubMenu::findOne(['submenu_id' => $submenu_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
