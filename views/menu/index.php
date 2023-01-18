<?php

use app\models\Menu;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\MenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'สร้างเมนู';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-index">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('คลิกเพื่อสร้าง', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <?php Pjax::begin();?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'menu_id',
        'menu_name',
        'url:url',
        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Menu $model, $key, $index, $column) {
                return Url::toRoute([$action, 'menu_id' => $model->menu_id]);
            },
        ],
    ],
]);?>

    <?php Pjax::end();?>

</div>
