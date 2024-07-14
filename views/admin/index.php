<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use humhub\modules\chatter\plugins\example\models\ConfigureForm;

/* @var $this yii\web\View */
/* @var $model humhub\modules\chatter\plugins\example\models\ConfigureForm */

$this->title = Yii::t('ChatterModule.base', 'Example Settings');
$this->params['breadcrumbs'][] = $this->title;

$model = ConfigureForm::getInstance();

if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    if ($model->saveSettings()) {
        Yii::$app->session->setFlash('success', 'Settings saved successfully.');
    } else {
        Yii::$app->session->setFlash('error', 'Failed to save settings.');
    }
}
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?= Html::encode($this->title) ?>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(['id' => 'configure-form']); ?>

        <?= $form->field($model, 'example') ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('AdminModule.base', 'Save'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>