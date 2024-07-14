<?php

namespace humhub\modules\chatter\plugins\example\models;

use Yii;
use yii\base\Model;

class ConfigureForm extends Model
{
    public $example;

    public function rules()
    {
        return [
            [['example'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'example' => 'Example',
        ];
    }

    public function loadSettings()
    {
        $this->example = Yii::$app->settings->get('example');
    }

    public function saveSettings()
    {
        Yii::$app->settings->set('example', $this->example);

        return true;
    }

    /**
     * Returns a loaded instance of this configuration model
     */
    public static function getInstance()
    {
        $config = new static;
        $config->loadSettings();

        return $config;
    }
}