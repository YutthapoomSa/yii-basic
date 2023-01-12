<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserSocket $model */

$this->title = 'Create User Socket';
$this->params['breadcrumbs'][] = ['label' => 'User Sockets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-socket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
