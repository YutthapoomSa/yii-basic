<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserPasswordSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-password-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hashPassword') ?>

    <?= $form->field($model, 'isResetProgress') ?>

    <?= $form->field($model, 'resetCode') ?>

    <?= $form->field($model, 'resetExpires') ?>

    <?php // echo $form->field($model, 'activate') ?>

    <?php // echo $form->field($model, 'userId') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <?php // echo $form->field($model, 'updatedAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
