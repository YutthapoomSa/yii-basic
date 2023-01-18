<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="menu-form" style="margin-top:30px";>

    <?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'menu_name')->textInput(['maxlength' => true])?>
    <?=$form->field($model, 'url')->textInput(['maxlength' => true])?>

    <div class="form-group" style="margin-top:20px";>
        <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
