@extends('frontend.template')
@section('banner')
<section class="main-slider">
	<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
		<div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
			<ul>
				@foreach ($allbanner as $item)
					<li data-index="rs-{{$item->id}}" data-transition="zoomout">
						<!-- MAIN IMAGE -->
						<img src="{{ asset ('storage/'.$item->cover)}}" alt="" class="rev-slidebg">

						<div class="tp-caption"
						data-paddingbottom="[15,15,15,15]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[15,15,15,15]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['750','750','750','650']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['20','20','0','0']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<h1>{{ Str::limit($item->title, 30, '...') }}</h1>
						</div>


						<div class="tp-caption" data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[15,15,15,15]"
						data-paddingright="[15,15,15,15]"
						data-paddingtop="[0,0,0,0]"
						data-responsive_offset="on"
						data-type="text" data-height="none"
						data-width="['700','750','700','450']"
						data-whitespace="normal"
						data-hoffset="['0','0','0','0']"
						data-voffset="['215','215','215','215']"
						data-x="['left','left','left','left']"
						data-y="['middle','middle','middle','middle']"
						data-textalign="['top','top','top','top']"
						data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
							<a href="{{ route ('detail-banner', $item->id )}}" class="theme-btn btn-style-one bg-theme-color2"><span class="btn-title">Voir plus</span></a>
						</div>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
</section>
@endsection
@section('body')
	<!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
                            <span class="sub-title">A propos</span>
							<h2>Qui sommes nous ?</h2>
							<div class="text">{!! html_entity_decode($company->vision) !!}</div>
						</div>

                        <h3>Nos Valeurs Communes</h3>

						<ul class="list-style-two">
							<li><i class="fa fa-check-circle"></i>Toujours à votre écoute.</li>
							<li><i class="fa fa-check-circle"></i> Toujours Engagé à vous satisfaire</li>
							<li><i class="fa fa-check-circle"></i> Tout simplifier pour vous.</li>
							<li><i class="fa fa-check-circle"></i> La Transparence.</li>
							<li><i class="fa fa-check-circle"></i> La Fidélité.</li>
							<li><i class="fa fa-check-circle"></i> L'innovation.</li>
						</ul>

						<div class="btn-box">
							<a href="tel:+92(8800)9806" class="info-btn">
								<i class="icon fa fa-phone"></i>
								<small>Appelez 24h/24 7/7</small> (+237) 6 94 35 71 99
							</a>
							<a href="{{route('about')}}" class="theme-btn btn-style-one"><span class="btn-title">Voir plus </span></a>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 overlay-anim wow fadeInUp"><img src="images/resource/about-1.jpg" alt=""></figure>
						<figure class="image-2 overlay-anim wow fadeInRight"><img src="images/resource/about-2.jpg" alt=""></figure>
						<div class="experience bounce-y">
							<div class="inner">
								<i class="icon flaticon-discuss"></i>
								<div class="text"><strong>5+</strong> Années d' <br>expérience</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

	<!-- Services Section -->
	<section class="services-section pt-0">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Nos offres</span>
				<h2>Les services que nous offrons <br>à nos clients.</h2>
			</div>

			<div class="row">

                @foreach ($allproduct as $item)
                    <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-box" style="background-image: url({{asset('storage/'.$item->cover)}})"></div>
                            <h5 class="title"><a href="#">{{ Str::limit($item->title, 30, '...') }}</a></h5>
                            <div class="text">{{ Str::limit($item->label, 100, '...') }}</div>
                            <a href="{{route ('detail-product', $item->id)}}" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Voir plus</a>
                        </div>
                    </div>
                @endforeach

			</div>
		</div>
	</section>
	<!-- End Services Section-->

	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="bg bg-pattern-5"></div>
		<div class="auto-container">
			<div class="row">
				<div class="title-column col-xl-5 col-lg-4 col-md-12">
					<div class="sec-title light">
						<span class="sub-title">Ils nous font confiance</span>
						<h2>Nos Partenaires</h2>
					</div>
				</div>

				<div class="testimonial-column col-xl-7 col-lg-8 col-md-12">
					<div class="carousel-outer">
						<div class="testimonial-carousel owl-carousel owl-theme">
							@foreach ($allpartner as $item)
                                <div class="testimonial-block" onclick="redirectUrl(this)" url="{{route('detail-partner', $item->id)}}">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{ asset ('storage/'.$item->cover) }}" alt=""></figure>
                                            <div class="info-box">
                                                <h4 class="name">{{$item->title}}</h4>
                                                <span class="designation">{{$item->label}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->

	<!-- News Section -->
	<section class="news-section">
		<div class="bg bg-pattern-6"></div>
		<div class="auto-container">
			<div class="sec-title text-center titleactualite">
				<span class="sub-title">Actualités</span>
				<h2>Nos Actualités</h2>
			</div>

			<div class="row">
                @foreach ($allnews as $item)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
									<a href="{{ route ('detail-news', $item->id) }}">
										<img src="{{asset ('storage/'.$item->cover)}}" alt="">
									</a>
								</figure>
                            </div>
                            <div class="content-box">
                                <span class="date">{{ $item->updated_at->DiffForHumans()}}</span>
                                <span class="post-info"><i class="fa fa-user-circle"></i> Administrateur</span>
                                <h5 class="title"><a href="{{ route ('detail-news', $item->id) }}">{{ Str::limit($item->title, 30, '...') }}</a></h5>
                                <div class="text">{{ Str::limit($item->title, 150, '...') }}</div>
                                <a href="{{ route ('detail-news', $item->id) }}" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Voir détail</a>
                            </div>
                        </div>
                    </div>
                @endforeach

			</div>
		</div>
	</section>
	<!--End News Section -->
    
@endsection