<?php

namespace app\controllers;

use Yii;
use app\models\Application;
use yii\web\Controller;
use yii\web\Response;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ApplicationController extends Controller
{

 	/**
     * {@inheritdoc}
     */
 	public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'create' => ['GET', 'POST'],
                    'update' => ['GET', 'POST'],
                ],
            ],
        ];
    }

    /**
     * Application create.
     *
     * @return Response|RedirectResponse
     */
    public function actionCreate()
	{
	    $model = new Application();

	    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
	        if ($model->save()) {
	            Yii::$app->session->setFlash('success', 'Application created successfully.');

	            return $this->redirect(['update', 'id' => $model->id]);
	        } else {
	            Yii::$app->session->setFlash('error', 'Failed to save the application record. Please try again.');
	        }
	    }

	    return $this->render('create', [
	        'model' => $model,
	    ]);
	}

	/**
     * Application update.
     *
     * @param integer $id
     * 
     * @return Response|RedirectResponse
     */
	public function actionUpdate(int $id)
	{
	    $model = $this->findModel($id);

	    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
	        if ($model->save()) {
	            Yii::$app->session->setFlash('success', 'Application updated successfully.');

	            return $this->redirect(['update', 'id' => $model->id]);
	        } else {
	            Yii::$app->session->setFlash('error', 'Failed to update the application record. Please try again.');
	        }
	    }

	    return $this->render('update', [
	        'model' => $model,
	    ]);
	}

	protected function findModel($id)
	{
	    if (($model = Application::findOne($id)) !== null) {
	        return $model;
	    }

	    throw new NotFoundHttpException('The requested application record does not exist.');
	}
}