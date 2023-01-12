<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserPassword $model */

$this->title = 'Update User Password: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Passwords', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-password-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
