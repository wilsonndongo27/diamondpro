
@extends('frontend.template')
@section('body')
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url('../../images/business.jpg');">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Nos Réalisations</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Accueil</a></li>
					<li>Réalisations</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Services Section -->
	<section class="">
		<div class="container pb-90">
			<div class="row">
				<!-- Service Block -->
				@foreach ($allachievement as $item)
					<div class="service-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
                            <div class="icon-box" style="background-image: url({{asset('storage/'.$item->cover)}})"></div>
                            <h5 class="title"><a href="#">{{ Str::limit($item->title, 30, '...') }}</a></h5>
                            <div class="text">{{ Str::limit($item->label, 100, '...') }}</div>
                            <a href="{{route ('detail-achievement', $item->id)}}" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Voir plus</a>
                        </div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Services Section-->
@endsection
	