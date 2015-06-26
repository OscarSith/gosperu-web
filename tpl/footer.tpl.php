<!-- Footer ================================================== -->
<section id="footer" class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<ul class="social-icons">
					<li class="wow bounceIn animated" data-wow-delay="0.1s"><a href="#."><i class="fa fa-facebook"></i></a></li>
					<li class="wow bounceIn animated" data-wow-delay="0.2s"><a href="#."><i class="fa fa-twitter"></i></a></li>
					<li class="wow bounceIn animated" data-wow-delay="0.3s"><a href="#."><i class="fa fa-google-plus"></i></a></li>
					<li class="wow bounceIn animated" data-wow-delay="0.5s"><a href="#."><i class="fa fa-pinterest"></i></a></li>
				</ul>
				<a href="index.html"><img src="img/logo.png" class="footerlogo wow zoomIn" alt="caymanlogo"></a>
				<p class="copyright">
					&copy; All rights reserved.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- JavaScript
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/animheader.js"></script>
<script src="js/scripts.js"></script>
<?php if ($page == 'servicios.php'): ?>
<script>
$('#sidebar').affix({
  offset: {
    top: 540
  }
});
/* activate scrollspy menu */
var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;
$body.scrollspy({
	target: '#leftCol',
	offset: navHeight
});

$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 84
        }, 1000);
        return false;
      }
    }
});
</script>
<?php endif ?>
</body>

<!-- Mirrored from themepush.com/demo/cayman/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jun 2015 20:57:48 GMT -->
</html>