<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserPassword $model */

$this->title = 'Create User Password';
$this->params['breadcrumbs'][] = ['label' => 'User Passwords', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-password-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
