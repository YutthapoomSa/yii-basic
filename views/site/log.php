<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use app\assets\LoginAsset;
use Symfony\Component\Console\Input\Input;
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

<body class="img js-fullheight"
	style="background-image: url(images/cover-2.jpg); height: 100px; background-position: center; background-repeat: no-repeat; background-size: cover;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">

						<div class="dot">
							<img>
						</div>

						<h3 class="mb-4 text-center" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
							<?= Html::encode($this->title) ?>
						</h3>

						<!-- Html -->
						<form action="#" class="signin-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<!--class form-control 8243s lines -->
								<input id="password-field" type="password" class="form-control" placeholder="Password"
									required>
								<span toggle="#password-field"
									class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary"
										style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));" text-shadow: 0px
										4px 4px rgba(0, 0, 0, 0.25);>Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff"
										style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
										Forgot Password</a>
								</div>
							</div>
						</form>
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