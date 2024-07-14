<?php

namespace humhub\modules\chatter\plugins\example\controllers;

use Yii;
use humhub\modules\admin\components\Controller;
use humhub\modules\chatter\plugins\example\models\ConfigureForm;

class AdminController extends Controller
{
    public function actionIndex()
    {
        $model = new ConfigureForm();
        $model->loadSettings();

        if ($model->load(Yii::$app->request->post()) && $model->saveSettings()) {
            $this->view->saved();
        }

        return $this->render('admin/index', ['model' => $model]);
    }
}