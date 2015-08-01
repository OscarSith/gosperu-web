<?php include 'tpl/header.tpl.php' ?>
<section class="page-wrapper gray">
	<div class="container">
		<br><br>
		<h1 class="title text-center"><?= $text['welcome_to'] ?></h1>
		<img src="img/logo_nosotros.png" alt="Logo en nosotros" id="img-logo-nosotros">
	</div>
</section>
<section class="split">
	<div class="col-md-6" style="height:420px;background-size:cover;background-image:url(img/nosotros.jpg);">
	</div>
	<div class="col-md-6 darkbgcolor" style="height:420px;">
		<h2 class="title"><?= $text['us'] ?></h2>
		<?= $text['about_us_text'] ?>
	</div>
</section>
<section>
	<div class="col-md-6" style="height:360px;">
		<div class="text-center center-block feature" style="width:70%">
			<br>
			<div class="octa">
				<i class="fa fa-street-view"></i>
			</div>
			<h3><?= $text['mission'] ?></h3>
			<?= $text['mission_text'] ?>
		</div>
	</div>
	<div class="col-md-6" style="height:360px;">
		<div class="text-center center-block feature" style="width:70%">
			<br>
			<div class="octa">
				<i class="fa fa-ship"></i>
			</div>
			<h3><?= $text['vision'] ?></h3>
			<p><?= $text['vision_text'] ?></p>
		</div>
	</div>
</section>
<section id="progress" style="height: 450px;background-image:url(img/bg_footer_nosotros.jpg)" class="parallax parallax-image">
	<div class="wrapsection">
	</div>
</section>
<?php include 'tpl/footer.tpl.php' ?>