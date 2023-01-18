<?php
/** @var yii\web\View $this */

use app\widgets\Alert;
use yii\bootstrap5\Html;
use app\assets\AppAsset;
use app\models\Menu;
use yii\bootstrap5\Nav;
use yii\helpers\Url;
use yii\bootstrap5\NavBar;

$this->title = 'Menu Dashboard';
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>" class="h-100">
<head>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>
    <div class="warp h-100 d-flex flex-column">

    <main class="d-flex">
        <?php echo $this->render('_sidebar')?>

        <div class="container-wrapper p-3">
            <?= Alert::widget()?>
        
        </div>
    </main>

    <!-- <footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; Smart Hospital <?=date('Y')?></div>
            <div class="col-md-6 text-center text-md-end"><?=Yii::powered()?></div>
        </div>
    </div>
</footer> -->

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>


