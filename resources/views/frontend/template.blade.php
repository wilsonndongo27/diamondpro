<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<meta name="description" content="Diamond PRO Consulting & Partners">
<meta name="author" content="Diamond PRO Consulting & Partners">

<link rel="shortcut icon" href="{{ asset ('images/logomini.jpeg') }}" type="image/x-icon">
<link rel="icon" href="{{ asset ('images/logomini.jpeg') }}" type="image/x-icon">

<!-- Stylesheets -->
<link href="{{ asset ('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset ('frontend/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset ('frontend/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset ('frontend/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="{{ asset ('frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset ('frontend/css/responsive.css') }}" rel="stylesheet">

<!-- CUSTOM CSS -->
<link href="{{ asset ('frontend/css/custom.css') }}" rel="stylesheet">


</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
	<!-- <div class="preloader"></div> -->

	<!-- Main Header-->
	<header class="main-header header-style-one">
		<!-- Header Top -->
		<div class="header-top">
			<div class="inner-container">

				<div class="top-left">
					<!-- Info List -->
					<ul class="list-style-one">
						<li><i class="fa fa-envelope"></i> <a href="mailto:diamondprocp@gmail.com">diamondprocp@gmail.com</a></li>
						<li><i class="fa fa-map-marker"></i> Carrefour Agip, Immeuble AD-PHARMA, Douala</li>
					</ul>
				</div>

				<div class="top-right">
					<ul class="useful-links">
						<li><a href="#">Aide</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="{{route('contact')}}">Contact</a></li>
					</ul>
					<ul class="social-icon-one">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-whatsapp-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Header Top -->

		<div class="header-lower">
			<div class="container-fluid">
				<!-- Main box -->
				<div class="main-box">
					<div class="logo-box">
						<div class="logo"><a href="/"><img src="{{ asset ('images/logo.jpeg') }}" alt="" title="Tronis"></a></div>
					</div>

					<!--Nav Box-->
					<div class="nav-outer">
						<nav class="nav main-menu">
							<ul class="navigation">

								<li class="current dropdown"><a href="#">A propos</a>
									<ul>
										<li><a href="{{route('about')}}">Qui sommes nous ?</a></li>
									</ul>
								</li>

								<li class="dropdown"><a href="#">Services</a>
									<ul>
										<li><a href="{{route('list-service')}}">Produits & Services</a></li>
									</ul>
								</li>

								<li class="dropdown"><a href="#">Equipe</a>
									<ul>
										<li><a href="{{route('list-staff')}}">Equipe Dirigente</a></li>
										<li><a href="{{route('list-partner')}}">Nos Partenaires</a></li>
									</ul>	
								</li>

								<li class="dropdown"><a href="#">Réalisations</a>
                                    <ul>
										<li><a href="{{route('list-achievement')}}">Nos réalisations</a></li>
									</ul>
                                </li>

								<li><a href="{{route('contact')}}">Contact</a></li>
							</ul>
						</nav>

						<!-- Main Menu End-->
					</div>

					<div class="outer-box">
						<div class="ui-btn-outer">
							<button class="ui-btn ui-btn search-btn">
								<span class="icon lnr lnr-icon-search"></span>
							</button>
						</div>

						<a href="tel:+92(8800)9806" class="info-btn">
							<i class="icon fa fa-phone"></i>
							<small>Appelez à tous moment</small>+(237)694357199 / 676382476
						</a>

						<!-- Mobile Nav toggler -->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>

			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"><a href="index.html"><img src="{{ asset ('images/logo.jpeg') }}" alt="" title=""></a></div>
					<div class="close-btn"><i class="icon fa fa-times"></i></div>
				</div>

				<ul class="navigation clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</ul>
				<ul class="contact-list-one">
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<i class="icon lnr-icon-phone-handset"></i>
							<span class="title">Appelez maintenant</span>
							<a href="tel:+237696422204">+237 696422204</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-envelope1"></span>
							<span class="title">Envoyez un mail</span>
							<a href="mailto:diamondprocp@gmail.com">diamondprocp@gmail.com</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-clock"></span>
							<span class="title">Envoyez un mail</span>
							Lundi - Samedi 8:00 - 17h00, Dimanche - FERMER
						</div>
					</li>
				</ul>


				<ul class="social-links">
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</nav>
		</div><!-- End Mobile Menu -->

		<!-- Header Search -->
		<div class="search-popup">
			<span class="search-back-drop"></span>
			<button class="close-search"><span class="fa fa-times"></span></button>

			<div class="search-inner">
				<form method="post" action="https://kodesolution.com/html/2023/amiso-html/blog-showcase.html">
					<div class="form-group">
						<input type="search" name="search-field" value="" placeholder="Search..." required="">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
		</div>
		<!-- End Header Search -->

		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo">
						<a href="#" title=""><img src="{{asset ('images/logo.jpeg') }}" alt="" title=""></a>
					</div>

					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation clearfix">
									<!--Keep This Empty / Menu will come through Javascript-->
								</ul>
							</div>
						</nav><!-- Main Menu End-->

						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->
	</header>
	<!--End Main Header -->

	<!--Main Slider-->
	@yield('banner')
	<!-- End Main Slider-->

	<!-------------------------------------
	BLOCK BODY -->

	@yield('body')

	<!-- END BODY -->

	<!-- Main Footer -->
	<footer class="main-footer">
		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="auto-container">
				<div class="row">
					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-12 col-md-12">
						<div class="footer-widget about-widget">
							<div class="logo"><a href="index.html"><img src="{{asset ('storage/'.$company->logo)}}" alt=""></a></div>
							<ul class="social-icon-two">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-4">
						<div class="footer-widget links-widget">
							<h6 class="widget-title">Accès rapide</h6>
							<ul class="user-links">
								<li><a href="#">A propos</a></li>
								<li><a href="#">Equipe Dirigente</a></li>
								<li><a href="#">Nos services</a></li>
								<li><a href="#">Contactez-nous</a></li>
							</ul>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-4 col-sm-8">
						<div class="footer-widget gallery-widget">
							<h6 class="widget-title">Nos Partenaires</h6>
							<div class="widget-content">
								<div class="outer clearfix">
									@foreach ($allpartner as $item)
										<figure class="image">
											<a href="javascript:void()"><img src="{{asset('storage/'.$item->cover)}}" alt=""></a>
										</figure>
									@endforeach
								</div>
							</div>
						</div>
					</div>

					<!--Footer Column-->
					<div class="footer-column col-xl-3 col-lg-4 col-md-4">
						<div class="footer-widget contacts-widget">
							<h6 class="widget-title">Contact</h6>
							<div class="text">Carrefour Agip, Immeuble AD-PHARMA, Douala</div>
							<ul class="contact-info">
								<li><i class="fa fa-envelope"></i> <a href="mailto:diamondprocp@gmail.com">diamondprocp@gmail.com</a><br></li>
								<li><i class="fa fa-phone-square"></i>Gérant : <a href="tel:+237698101237">(+237)698101237 / 675791391</a><br></li>
								<li><i class="fa fa-phone-square"></i>Service Commercial <a href="tel:+237694357199">(+237)694357199 / 676382476</a><br></li>
								<li><i class="fa fa-phone-square"></i>Service Technique <a href="tel:+237693339762">(+237)694357199 / 676382476</a><br></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Footer Bottom-->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="copyright-text">&copy; Copyright <span class="copydate"></span> Diamond PRO Consulting & Partners, Made by  <a href="https://polyh-sa.com">polyh-sa.com</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{ asset ('frontend/js/jquery.js') }}"></script> 
<script src="{{ asset ('frontend/js/popper.min.js') }}"></script>
<!--Revolution Slider-->
<script src="{{ asset ('frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset ('frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset ('frontend/js/main-slider-script.js') }}"></script>
<!--Revolution Slider-->
<script src="{{ asset ('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('frontend/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset ('frontend/js/wow.js') }}"></script>
<script src="{{ asset ('frontend/js/appear.js') }}"></script>
<script src="{{ asset ('frontend/js/knob.js') }}"></script>
<script src="{{ asset ('frontend/js/select2.min.js') }}"></script>
<script src="{{ asset ('frontend/js/owl.js') }}"></script>
<script src="{{ asset ('frontend/js/script.js') }}"></script>
<script>    
	var data = new Date();
    $('.copydate').text(data.getFullYear());
</script>

{{-- CUSTOM JS --}}
<script src="{{ asset ('frontend/js/custom.js') }}"></script>
</body>

<!-- Mirrored from kodesolution.com/html/2023/amiso-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 15:39:34 GMT -->
</html>