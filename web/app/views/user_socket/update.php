<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserSocket $model */

$this->title = 'Update User Socket: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Sockets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-socket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
