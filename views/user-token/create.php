<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserToken $model */

$this->title = 'Create User Token';
$this->params['breadcrumbs'][] = ['label' => 'User Tokens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-token-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
