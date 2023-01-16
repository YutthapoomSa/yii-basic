<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SubMenu $model */

$this->title = 'Update Sub Menu: ' . $model->submenu_id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->submenu_id, 'url' => ['view', 'submenu_id' => $model->submenu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sub-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
