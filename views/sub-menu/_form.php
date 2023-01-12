<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SubMenu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sub-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_menu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urlIframe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urlLink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urlDesign')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
