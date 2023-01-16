<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\SubMenu $model */

$this->title = $model->submenu_id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sub-menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'submenu_id' => $model->submenu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'submenu_id' => $model->submenu_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'submenu_id',
            'submenu_name',
            'url:url',
            'menu_id',
        ],
    ]) ?>

</div>
