<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
/**$this->params['breadcrumbs'][] = $this->title;*/
$this->registerCssFile('@web/css/loginHome.css');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/loginHome.css">
</head>


<body class="img js-fullheight" style="background-image: url(images/coverLogin.jpg); height: 100px; background-position: center; background-repeat: no-repeat; background-size: cover;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
                        <div class="dot">
                            <?= Html::img('images/logowachi2.png'); ?>
                        </div>

                        <p>
                        <h3 class="mb-4 text-center" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color:#333333; font-weight:bold;"><?= Html::encode($this->title) ?></h3>
                        </p>

                        <!-- <p>Please fill out the following fields to login:</p>  -->

                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'layout' => 'horizontal',
                            'options' => ['class' => 'signin-form'],
                            'fieldConfig' => [
                                'template' => "{input}\n{error}",
                                'inputOptions' => ['class' => 'form-control-input'],
                                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                            ],
                        ]); ?>
                        
                    <div class="space">
                        <div class="form-group">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true])
                                ->input('username', ['placeholder' => "Username"]) ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'password')->passwordInput()->input('password', ['placeholder' => "Password"]) ?>
                        </div>

                        <div class="form-group d-md-flex">
                            <div class="w-50" style="color:#333333;">
                                <?= $form->field($model, 'rememberMe')->checkbox([
                                    'template' => "<div class=\"offset-lg-1 custom-control custom-checkbox\">{input}\n {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                    //  'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                ]) ?>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" style="color: #333333;">
                                    Forgot Password</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'form-control btn btn-primary submit px-3', 'name' => 'login-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>