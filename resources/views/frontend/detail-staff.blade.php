@extends('frontend.template')
@section('body')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(../../images/partner.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Bibliographie</h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Accueil</a></li>
					<li>Membres</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Blog Details Start-->
	<section class="blog-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="blog-details__left">
						<div class="blog-details__img">
							<img src="{{asset('storage/'.$staff->pp)}}" alt="">
						</div>
						<div class="blog-details__content">
							<span>{{$profil->name}}</span>
							<h3 class="blog-details__title">{{$staff->name}}</h3>
							<div class="blockcontenttext">
								<p class="blog-details__text-2">{!! html_entity_decode($staff->description) !!}</p>
							</div>
						</div>
						<div class="blog-details__bottom">
							<p class="blog-details__tags"> 
								<span>Partager sur : </span> 
							</p>
							<div class="blog-details__social-list"> 
								<a href="javascript:void()"><i class="fab fa-twitter"></i></a> 
								<a href="javascript:void()"><i class="fab fa-facebook"></i></a> 
								<a href="javascript:void()"><i class="fab fa-pinterest-p"></i></a> 
								<a href="javascript:void()"><i class="fab fa-instagram"></i></a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Blog Details End-->
@endsection