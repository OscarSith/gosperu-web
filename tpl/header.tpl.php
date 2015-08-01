<?php
$url = explode('/', $_SERVER['PHP_SELF']);
$page = array_pop($url);

include 'language.php';

$text = $lang[ $arr[0] ];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Oscar Larriega <larriega@gmail.com>">
<link rel="icon" href="img/favicon.png">
<title>Gosperu</title>
<!--Stylesheet-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/menu.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet"> 
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page-loader">
	<img src="img/loader.gif" alt="">
</div>
<header id="header">
	<div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin fadeInUp align-right on">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default redq" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand large" href="index.php">
							<img src="img/logo.png" alt="caymanlogo" id="logo">
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
					<div class="collapse navbar-collapse">
						<a class="navbar-brand mobile pull-left" href="#">
							<img src="img/logo_nosotros.png" style="width: 156px;">
						</a>
						<a class="mobile-menu-close"><i class="fa fa-random"></i></a>
						<ul class="nav navbar-nav nav-list">
							<li>
								<a href="index.php"><span class="link-item"><?= $text['home'] ?></span></a>
							</li>
							<li>
								<a href="nosotros.php"><span class="link-item"><?= $text['us'] ?></span></a>
							</li>
							<li>
								<a href="servicios.php"><span class="link-item"><?= $text['service'] ?></span></a>
							</li>
							<li>
								<a href="puertos.php"><span class="link-item"><?= $text['ports'] ?></span></a>
							</li>
							<li>
								<a href="contacto.php"><span class="link-item"><?= $text['contact'] ?></span></a>
							</li>
							<?php if ($arr[0] == 'es'): ?>
	                            <li><a href="?lang=en"><span class="link-item"><i class="fa fa-language fa-lg"></i> Inglés</span></a></li>
	                        <?php else: ?>
	                            <li><a href="?lang=es"><span class="link-item"><i class="fa fa-language fa-lg"></i> <?php echo $text['lang_es'] ?></span></a></li>
	                        <?php endif ?>
						</ul>
						<!-- end .nav .navbar-nav -->
					</div>
					<!-- end .navbar-collapse -->
					<!-- </div> -->
					<!-- end .container-fluid -->
				</div>
				<!-- end .container -->
				</nav>
				<!-- end nav -->
			</div>
			<!-- end .row -->
		</div>
		<!-- end .container -->
	</div>
</header>