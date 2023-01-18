<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */

$this->title = 'แก้ไขเมนู: ' . $model->menu_id;
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->menu_id, 'url' => ['view', 'menu_id' => $model->menu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-update card-body text-center" style="width: 35rem;" >

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
