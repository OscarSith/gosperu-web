<?php include 'tpl/header.tpl.php' ?>
<!-- Animated Intro
================================================== -->
<div id="large-header" class="large-header">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title">
		<span class="thin wow pulse" data-wow-duration="1.8s" data-wow-delay="0.5s" data-wow-iteration="3"><?= $text['welcome'] ?></span>
		<span class="help-block wow zoomIn">
			<?= $text['welcome_sub'] ?>
		</span>
		<a href="contacto.php" class="btn btn-default wow fadeInLeft"><?= $text['welcome_btn'] ?></a>
	</h1>
</div>
<?php include 'tpl/footer.tpl.php' ?>