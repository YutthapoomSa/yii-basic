<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SubMenu $model */

$this->title = 'Create Sub Menu';
$this->params['breadcrumbs'][] = ['label' => 'Sub Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
