@extends('frontend.template')
@section('body')	
    <!-- Start main-content -->
	<section class="page-title" style="background-image: url(../../images/partner.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Notre Equipe</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Accueil</a></li>
					<li>Membres</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Team Section -->
	<section class="">
		<div class="container pb-90">
			<div class="row">
                @foreach ($allstaff as $item)
                    <div class="team-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box mb-md-30">
                            <div class="image-box" style="background-image: url('{{asset('storage/'.$item->pp)}}')  !important">
                                <figure class="image">
                                    <a href="{{route('detail-staff', $item->id)}}">
                                        <img src="{{asset('storage/'.$item->pp)}}" alt="">
                                    </a>
                                </figure>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                                <span class="share-icon fa fa-plus"></span>
                            </div>
                            <div class="info-box">
                                <h4 class="name">
                                    <a href="{{route('detail-staff', $item->id)}}">{{$item->name}}</a>
                                </h4>
                                <span class="designation">{{$item->profil}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</section>
	<!--End Team Section -->
@endsection