<?php include 'tpl/header.tpl.php' ?>
<section class="page-wrapper" style="padding-top:64px;padding-bottom:1px">
	<div id="map"></div>
</section>
<section id="contact" class="page-wrapper gray">
	<div class="container">
		<div class="col-sm-7">
			<div class="regularform onwhite w680 wow flipInY text-center">
				<h4><b><?= $text['form_title'] ?></b></h4>
				<br/>
				<div class="done">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<p id="msg_success"></p>
					</div>
				</div>
				<div class="msg_errors" style="display:none">
					<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<ul id="msg_errors" class="text-left text-danger" style="font-weight: bold"></ul>
					</div>
				</div>
				<form method="post" id="contactform">
					<input name="name" type="text" class="col-sm-12" placeholder="<?= $text['name'] ?>">
					<input name="email" type="email" class="col-sm-12" placeholder="<?= $text['mail'] ?>">
					<textarea name="comment" class="col-sm-12" placeholder="<?= $text['message'] ?>"></textarea>
					<input type="submit" id="submit" class="contact submit btn btn-minimal" style="margin-top:30px;background-color:#fff;" value="<?= $text['send'] ?>">
				</form>
			</div>
		</div>
		<div class="col-sm-5">
			<h4><b><?= $text['form_title_right'] ?></b></h4>
			<br>
			<address>
				<ul class="list-unstyled">
					<li>
						<i class="fa fa-map-marker fa-lg"></i> Cal. Martín de Murúa 250 Of. 201 San Miguel - Lima, Perú
						<br><br>
					</li>
					<li>
						<i class="fa fa-phone fa-lg"></i> 00 511 451 8301
						<br><br>
					</li>
					<li><i class="fa fa-envelope"></i> info@gosperu.com</li>
				</ul>
			</address>
		</div>
	</div>
	<hr>
</section>
<?php include 'tpl/footer.tpl.php' ?>