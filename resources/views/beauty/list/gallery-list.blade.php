@extends('beauty.main')

@section('title')
Галерея
@endsection

@section('content')
	<div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s">
		<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="0.2s"">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="{{action('MainController@detail')}}" style="background-image: url(http://themebubble.com/demo/photosy/wp-content/uploads/2018/06/beach.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="{{action('MainController@detail')}}">One Page</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="0.5s"">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="{{action('MainController@detail')}}" style="background-image: url(fronpo/images/gallery-img3.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="{{action('MainController@detail')}}">One Page</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="0.8s">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="#" style="background-image: url(fronpo/images/team-img3.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="http://themebubble.com/demo/photosy/home-9/">One Page</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="#" style="background-image: url(fronpo/images/gallery-img3.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="http://themebubble.com/demo/photosy/home-9/">One Page</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="#" style="background-image: url(fronpo/images/gallery-img3.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="http://themebubble.com/demo/photosy/home-9/">One Page</a>
			</div>
		</div>


		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="#" style="background-image: url(fronpo/images/gallery-img3.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="http://themebubble.com/demo/photosy/home-9/">One Page</a>
			</div>
		</div>


		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="#" style="background-image: url(fronpo/images/gallery-img3.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="http://themebubble.com/demo/photosy/home-9/">One Page</a>
			</div>
		</div>


		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="#" style="background-image: url(fronpo/images/gallery-img3.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="http://themebubble.com/demo/photosy/home-9/">One Page</a>
			</div>
		</div>



		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
			<div class="tt-page">
				<div class="tt-page-img-wrap">
					<a class="tt-page-img" href="#" style="background-image: url(fronpo/images/gallery-img3.jpg)"></a>
				</div> 
					<a class="tt-page-title" href="http://themebubble.com/demo/photosy/home-9/">One Page</a>
			</div>
		</div>
	</div>


@endsection