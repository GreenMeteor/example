<?php

namespace humhub\modules\chatter\plugins\example;

use Yii;
use humhub\components\Module as BaseModule;

class Plugin extends BaseModule
{
    public $controllerMap = [
        'admin' => 'humhub\modules\chatter\plugins\example\controllers\PluginsController',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // Set the controller namespace
        $this->controllerNamespace = 'humhub\modules\chatter\plugins\example\controllers';
    }

    /**
     * Renders the view for the plugin.
     * @return string The rendered content of the plugin
     */
    public function renderView()
    {
        return Yii::$app->view->render('@example/views/example/index');
    }
}