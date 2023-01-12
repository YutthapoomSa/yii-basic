<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserSocket $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-socket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'refreshToken')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <?= $form->field($model, 'updatedAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
