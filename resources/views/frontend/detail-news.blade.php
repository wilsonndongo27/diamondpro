@extends('frontend.template')
@section('body')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{asset('storage/'.$news->cover)}});">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">{{$news->title}}</h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Accueil</a></li>
					<li>Actualité</li>
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
							<img src="images/resource/news-details.jpg" alt="">
							<div class="blog-details__date">
								<span class="day">{{$news->updated_at->DiffForHumans()}}</span>
							</div>
						</div>
						<div class="blog-details__content">
							<ul class="list-unstyled blog-details__meta">
								<li><a href="{{ route ('detail-news', $news->id) }}"><i class="fas fa-user-circle"></i> Administrateur</a> </li>
							</ul>
							<h3 class="blog-details__title">{{$news->label}}</h3>
							<div class="blockcontenttext">
								<p class="blog-details__text-2">{!! html_entity_decode($news->description) !!}</p>
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