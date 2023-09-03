
@extends('frontend.template')
@section('body')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url('../../images/contact.jpg');">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Contactez-nous</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Accueil</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-5 col-lg-6 mb-md-60">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">Vous avez besoin d'aide ?</span>
							<h2>Contactez-nous pour une asistance</h2>
							<div class="text">Vous pouvez aussi utiliser le formulaire ci-dessous pour nous envoyé un message et nous vous contacterons au plustôt!</div>
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6>Pour toute question ?</h6>
									<a href="tel:+237694357199">(+237) 694 35 71 99/ 693 33 97 62 / 675 92 48 26</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6>Rediger un email</h6>
									<a href="mailto:diamondprocp@gmail.com">diamondprocp@gmail.com</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6>Visiter nous en cas de besoin</h6>
									<span>Carrefour Agip, Immeuble AD-PHARMA, Douala</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-7 col-lg-6">
					<!-- Google Map HTML Codes -->
					<iframe src="{{$company->map}}" width="100%" height="550" frameborder="0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

	<!--Contact Details Start-->
	<section class="team-contact-form">
		<div class="container pb-100">
			<div class="sec-title text-center">
				<span class="sub-title">Rediger votre message ci-dessous</span>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-3 text-center">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Envoyez</span></button>
							<button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->
@endsection