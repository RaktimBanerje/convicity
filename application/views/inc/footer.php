<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4" style="border: 0px; border-right: 1px solid #505056; padding: 0px 15px;">
				<a class="footer-logo" href="#">
					<img src="<?php echo base_url() ?>assets/images/footerlogo.png" class="img-responsive">
				</a>
				<p class="mt-4">Welcome to the futuristic happy living at Convicity -a modern and elegantly designed residential
					project that offers exquisite life style maintaining work-life balance.</p>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-2" style="border: 0px; border-right: 1px solid #505056; padding: 0px 15px;">
				<h4 class="mb-4">DEVELOPER</h4>
				<ul class="p-0" style="list-style-type: none;">
					<li class="mt-1">Bloomsbury Infrastructure Pvt. Ltd.</li>
					<li class="mt-1">Newtown, Kolkata- 700156.</li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3" style="border: 0px; border-right: 1px solid #505056; padding: 0px 15px;">
				<h4 class="mb-4">SITE LOCATION</h4>
				<ul class="p-0" style="list-style-type: none;">
					<li class="mt-1"><a class="convicity-a" href="#">Home</a></li>
					<li class="mt-1"><a class="convicity-a" href="#">Corporate</a></li>
					<li class="mt-1"><a class="convicity-a" href="#">Project</a></li>
					<li class="mt-1"><a class="convicity-a" href="#">Media</a></li>
					<li class="mt-1"><a class="convicity-a" href="#">Careers</a></li>
					<li class="mt-1"><a class="convicity-a" href="#">Gallery</a></li>
					<li class="mt-1"><a class="convicity-a" href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<h4 class="mb-4">CONTACT US</h4>
				<ul class="p-0" style="list-style-type: none;">
					<li class="mt-1"><p>Hatishala, Off- 6Lane<br>Newtown, Kolkata- 700156.</p></li>
					<li class="mt-1">Phone: <a class="convicity-a" href="tel:+916289346024">+91 6289346024</a></li>
					<li class="mt-1">Email: <a class="convicity-a" href="mailto:info@bloomsburyinfra.in">info@bloomsburyinfra.in</a></li>
				</ul>
				<h4 class="mb-4">CONNECT WITH US</h4>
				<div class="connect-with">
					<ul>
						<li><a target="_blank" href="https://www.facebook.com/convicity"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/watch?v=GSLK2Ozh7AA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/convicitykolkata"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/convicity"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="d-none d-md-block">
		<a target="_blank" href="https://api.whatsapp.com/send?phone=9830082872" class="whatsapp-button"><i
        	class="fab fa-whatsapp"></i></a>
        <a target="_blank" href="tel:+919830082872" class="call-button"><i class="fa fa-phone"></i></a>
        <a target="_blank" class="enquiry-button" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><i class="fa fa-question"></i></a>
    </div>

	<nav class="navbar navbar-expand fixed-bottom d-flex d-md-none justify-content-center p-0" style="background-color: white !important;">
		<a target="_blank" href="https://api.whatsapp.com/send?phone=9830082872" class="whatsapp-mobile-button"><i
        	class="fab fa-whatsapp"></i></a>
		<a target="_blank" href="#" class="w-50">
			<button  class="btn btn-danger convicity-button w-100" style="font-weight: 500; height: 50px;">CALL NOW</button>
		</a>
		<button data-toggle="modal" data-target="#leadmodal" data-backdrop="static" data-keyboard="false" class="btn btn-danger convicity-button w-50 ml-1" style="height: 50px;">LET'S GET STARTED</button>
	</nav>

	<?php $this->load->view('inc/modal.php') ?>
	<script src="<?php echo base_url() ?>assets/js/script.js"></script>
	<script src="<?php echo base_url() ?>assets/js/owl.js"></script>
	<script src="<?php echo base_url() ?>assets/lightbox/dist/js/lightbox.js"></script>
</footer>