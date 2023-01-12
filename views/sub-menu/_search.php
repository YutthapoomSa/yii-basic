<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SubMenuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sub-menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sub_menu_name') ?>

    <?= $form->field($model, 'urlIframe') ?>

    <?= $form->field($model, 'urlLink') ?>

    <?= $form->field($model, 'urlDesign') ?>

    <?php // echo $form->field($model, 'menu_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
