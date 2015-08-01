<?php include 'tpl/header.tpl.php' ?>
<section style="margin-top:63px">
	<div class="cayman-slider">
		<div class="item">
			<div style="background-image:url('img/servicios/TRANSPORTE DE CARGA INTERNACIONAL MARITIMA Y AEREA.jpg');background-size:cover;height:420px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="slider-content-style1">
								<h2>
									<span class="text2 big wow zoomIn transformnone" data-wow-delay="0.4s" data-wow-duration="2s"><?= $text['serv01_title'] ?></span>
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div style="background-image:url('img/servicios/TRANSPORTE DE CARGA INTERNACIONAL FCL, LCL Y CARGA SUELTA.jpg');background-size:cover;height:420px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="slider-content-style1">
								<h2>
									<span><?= $text['serv02_title'] ?></span>
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div style="background-image:url('img/servicios/ASESORIA DE COMERCIO EXTERIOR.jpg');background-size:cover;height:420px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="slider-content-style1">
								<h2>
									<span style="color:#2D97CF"><?= $text['serv03_title'] ?></span>
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div style="background-image:url('img/servicios/SERVICIO LOGISTICO DE IMPORTACION Y EXPORTACION.jpg');background-size:cover;height:420px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="slider-content-style1">
								<h2>
									<span><?= $text['serv04_title'] ?></span>
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div style="background-image:url('img/servicios/TRAZABILIDAD DE LOS EMBARQUES.jpg');background-size:cover;height:420px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="slider-content-style1">
								<h2>
									<span style="color:#000"><?= $text['serv05_title'] ?></span>
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="page-wrapper gray">
	<div class="container knowledgebase">
		<div class="row">
			<!--left-->
			<div class="col-md-3" id="leftCol">
				<ul class="nav nav-stacked" id="sidebar" style="margin-top:20px;">
					<li class="text-center menutitle"><?= $text['service'] ?></li>
					<li><a href="#sec0" class="text-lowercase"><?= $text['serv01_title'] ?></a></li>
					<li><a href="#sec1" class="text-lowercase"><?= $text['serv02_title'] ?></a></li>
					<li><a href="#sec2" class="text-lowercase"><?= $text['serv03_title'] ?></a></li>
					<li><a href="#sec3" class="text-lowercase"><?= $text['serv04_title'] ?></a></li>
					<li><a href="#sec4" class="text-lowercase"><?= $text['serv05_title'] ?></a></li>
				</ul>
			</div>
			<!--/left-->
			<!--right-->
			<div class="col-md-9">
				<h3 id="sec0"><?= $text['serv01_title'] ?></h3>
				<div class="content">
					<p><?= $text['serv01_text'] ?></p>
				</div>
				<h3 id="sec1"><?= $text['serv02_title'] ?></h3>
				<div class="content">
					<p><?= $text['serv02_text'] ?></p>
				</div>
				<h3 id="sec2"><?= $text['serv03_title'] ?></h3>
				<div class="content">
					<p><?= $text['serv03_text'] ?></p>
				</div>
				<h3 id="sec3"><?= $text['serv04_title'] ?></h3>
				<div class="content">
					<p><?= $text['serv04_text'] ?></p>
					<ul>
						<?= $text['serv04_text_2'] ?>
					</ul>
				</div>
				<h3 id="sec4"><?= $text['serv05_title'] ?></h3>
				<div class="content">
					<p><?= $text['serv05_text'] ?></p>
				</div>
			</div>
			<!--/right-->
		</div>
	</div>
</section>
<?php include 'tpl/footer.tpl.php' ?>