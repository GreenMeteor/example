<?php

use yii\helpers\Html;
use humhub\modules\chatter\plugins\example\models\ConfigureForm;

$example = ConfigureForm::getInstance()->example

?>
<div class="panel panel-default">
    <div class="panel-body">
        <?= Html::encode($example) ?>
    </div>
</div>