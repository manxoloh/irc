<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="page-loading">
	<img src="images/loader.gif" alt="" />
</div>

<div class="theme-layout" id="scrollup">
	
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a></div>
			<div class="menu-resaction">
				<div class="res-openmenu">
					<img src="images/icon.png" alt="" /> Menu
				</div>
				<div class="res-closemenu">
					<img src="images/icon2.png" alt="" /> Close
				</div>
			</div>
		</div>
		<div class="responsive-opensec">
			<div class="btn-extars">
				<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
				<ul class="account-btns">
					<?php if(Yii::$app->user->isGuest) { ?>
    					<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
    					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
    				<?php } else { ?>
    					<li class="<?= Url::to(['/']) ?>"><a title=""><i class="la la-user"></i> Account</a></li>
    				<?php } ?>
				</ul>
			</div><!-- Btn Extras -->
			<form class="res-search">
				<input type="text" placeholder="Job title, keywords or company name" />
				<button type="submit"><i class="la la-search"></i></button>
			</form>
			<div class="responsivemenu">
				<ul>
						<li>
							<a href="<?= Url::to(['/']) ?>" title="Home">Home</a>
						</li>
						<li>
							<a href="<?= Url::to(['/employers']) ?>" title="Employers">Employers</a>
						</li>
						<li>
							<a href="<?= Url::to(['/candidates']) ?>" title="Candidates">Candidates</a>
						</li>
						<li>
							<a href="<?= Url::to(['/jobs']) ?>" title="Jobs">Jobs</a>
						</li>
						<li>
							<a href="<?= Url::to(['/site/how-it-works']) ?>" title="Jobs">How it Works</a>
						</li>
				</ul>
			</div>
		</div>
	</div>
	
	<header class="stick-top forsticky">
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="<?= Url::to(['/'])?>" title=""><img class="hidesticky" src="images/resource/logo.png" alt="" /><img class="showsticky" src="images/resource/logo.png" alt="" /></a>
				</div><!-- Logo -->
				<div class="btn-extars">
					<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
					<ul class="account-btns">
					<?php if(Yii::$app->user->isGuest) { ?>
    					<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
    					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
    				<?php } else { ?>
    					<li class="<?= Url::to(['/']) ?>"><a title=""><i class="la la-user"></i> Account</a></li>
    				<?php } ?>
					</ul>
				</div><!-- Btn Extras -->
				<nav>
					<ul>
						<li>
							<a href="<?= Url::to(['/']) ?>" title="Home">Home</a>
						</li>
						<li>
							<a href="<?= Url::to(['/employers']) ?>" title="Employers">Employers</a>
						</li>
						<li>
							<a href="<?= Url::to(['/candidates']) ?>" title="Candidates">Candidates</a>
						</li>
						<li>
							<a href="<?= Url::to(['/jobs']) ?>" title="Jobs">Jobs</a>
						</li>
						<li>
							<a href="<?= Url::to(['/site/how-it-works']) ?>" title="Jobs">How it Works</a>
						</li>
					</ul>
				</nav><!-- Menus -->
			</div>
		</div>
	</header>
	<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
							<h3><?= $this->title ? $this->title : "eHorizon iRecruitment" ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
        <?= $content ?>
	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a>
								</div>
								<span>West Point Building, Mpaka Road, Parklands </span>
								<span>+ 254 20 7122971-3 / +254 722 207450 </span>
								<span><a href="mailto:info@stl-horizon.com" class="__cf_email__"> [info@stl-horizon.com]  </a></span>
								<div class="social">
									<a href="http://facebook.com/stllimited/" target="_blank" title=""><i class="fa fa-facebook"></i></a>
									<a href="http://twitter.com/STLHorizon" target="_blank" title=""><i class="fa fa-twitter"></i></a>
									<a href="http://linkedin.com/in/software-technologies-limited-68a27354/" target="_blank" title=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-lg-4 column">
						<div class="widget">
							<h3 class="footer-title">Frequently Asked Questions</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="https://www.stl-horizon.com/privacy-policy/" title="Privacy Policy">Privacy Policy </a>
										<a href="https://www.stl-horizon.com/terms-and-conditions/" title="Terms & Conditions">Terms & Conditions</a>
										<a href="#" title="Disclaimer">Disclaimer</a>
									</div>
									<div class="col-lg-6">
										<a href="https://www.stl-horizon.com/support/" title="Customer Support">Support </a>
										<a href="<?= Url::to(['/site/how-it-works'])?>" title="How It Works">How It Works </a>
										<a href="#" title="">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 column">
						<div class="widget">
							<h3 class="footer-title">Find Jobs</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title="">Nairobi</a>	
										<a href="#" title="">Mombasa</a>	
										<a href="#" title="">Nakuru</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="download_widget">
								<a href="#" title=""><img src="images/resource/dw1.png" alt="" /></a>
								<a href="#" title=""><img src="images/resource/dw2.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span>&copy; <?= date("Y") ?> eHorizon iRecruitment. All rights reserved. Powered by <a href="www.stl-horizon.com" target="_blank">Software Technologies Limited</a></span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>

</div>

<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>User Login</h3>
		<span>Click To Login With Demo User</span>
		<div class="select-user">
			<span>Candidate</span>
			<span>Employer</span>
		</div>
		<form>
			<div class="cfield">
				<input type="text" placeholder="Username" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<p class="remember-label">
				<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
			</p>
			<a href="#" title="">Forgot Password?</a>
			<button type="submit">Login</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Sign Up</h3>
		<div class="select-user">
			<span>Candidate</span>
			<span>Employer</span>
		</div>
		<form>
			<div class="cfield">
				<input type="text" placeholder="Username" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<div class="cfield">
				<input type="text" placeholder="Email" />
				<i class="la la-envelope-o"></i>
			</div>
			<div class="dropdown-field">
				<select data-placeholder="Please Select Specialism" class="chosen">
					<option>Web Development</option>
					<option>Web Designing</option>
					<option>Art & Culture</option>
					<option>Reading & Writing</option>
				</select>
			</div>
			<div class="cfield">
				<input type="text" placeholder="Phone Number" />
				<i class="la la-phone"></i>
			</div>
			<button type="submit">Signup</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- SIGNUP POPUP -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
