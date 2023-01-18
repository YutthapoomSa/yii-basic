<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */

$this->title = 'สร้างข้อมูล';
$this->params['breadcrumbs'][] = ['label' => 'สร้างเมนู', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-create, card, text-center" style="width: 35rem;">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
