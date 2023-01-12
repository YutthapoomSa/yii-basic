<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserPassword $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-password-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hashPassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isResetProgress')->textInput() ?>

    <?= $form->field($model, 'resetCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resetExpires')->textInput() ?>

    <?= $form->field($model, 'activate')->textInput() ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <?= $form->field($model, 'updatedAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
