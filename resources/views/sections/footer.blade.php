<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="{{ url('images/logo.png') }}" alt="" class="img-fluid">
						<img src="{{ url('images/text-logo.png') }}" alt="" class="img-fluid text-logo">
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item">
							<a href="{{ url('https://www.facebook.com/themefisher') }}"><i class="icofont-facebook"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="{{ url('https://twitter.com/themefisher') }}"><i class="icofont-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="{{ url('https://www.pinterest.com/themefisher/')}}"><i class="icofont-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Contactez-nous</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Assistance disponible 24h/24</span>
						</div>
						<h4 class="mt-2"><a href="{{ url('mailto:support@email.com') }}">Vinon@email.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Lun à Ven : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="{{ url('tel:+228 90010203') }}">+228 90010203</a></h4>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						Copyright &copy; 2022
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Votre address" required>
							<button type="submit" class="btn btn-main-2 btn-round-full">Envoyer</button>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop scroll-top-to" href="{{ url('#top') }}">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

   

    <!-- 
    Essential Scripts
    =====================================-->
    <script src="{{ url('plugins/jquery/jquery.js') }}"></script>
    <script src="{{ url('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ url('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ url('plugins/shuffle/shuffle.min.js') }}"></script>

    <!-- Google Map -->
    <script src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA') }}"></script>
    <script src="{{ url('plugins/google-map/gmap.js') }}"></script>
    
    <script src="{{ url('js/script.js') }}"></script>

  </body>
  </html>