<?php

namespace humhub\modules\chatter\plugins\example\controllers;

use Yii;
use humhub\components\Controller;

class ExampleController extends Controller
{
    /**
     * Renders the index view for the plugin.
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}