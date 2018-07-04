@extends('beauty.main')

@section('block-title')
@endsection

@section('section-head')
@endsection

@section('content')

	<div class="col-md-12 head-detail">

			<a href="/fronpo/images/gallery-img3.jpg" class="pic-detail" style="background-image: url(/fronpo/images/gallery-img3.jpg)"></a>


		<div class="paginate-thumb" id="thumb-carousel">


			<div class="thumb-item">
				<div class="thumb-img" style="background-image: url(/fronpo/images/gallery-img3.jpg)">
				</div>
				<div class="thumb-info">
					<div class="thumb-title">Crop up</div>
					<div class="thumb-subtitle">Studio</div>
				</div>
			</div>

			<div class="thumb-item">
				<div class="thumb-img" style="background-image: url(/fronpo/images/gallery-img3.jpg)">
				</div>
				<div class="thumb-info">
					<div class="thumb-title">Crop up</div>
					<div class="thumb-subtitle">Studio</div>
				</div>
			</div>


			<div class="thumb-item active">
				<div class="thumb-img" style="background-image: url(/fronpo/images/gallery-img3.jpg)">
				</div>
				<div class="thumb-info">
					<div class="thumb-title">Crop up</div>
					<div class="thumb-subtitle">Studio</div>
				</div>
			</div>

			<div class="thumb-item">
				<div class="thumb-img" style="background-image: url(/fronpo/images/gallery-img3.jpg)">
				</div>
				<div class="thumb-info">
					<div class="thumb-title">Crop up</div>
					<div class="thumb-subtitle">Studio</div>
				</div>
			</div>

			<div class="thumb-item">
				<div class="thumb-img" style="background-image: url(/fronpo/images/gallery-img3.jpg)">
				</div>
				<div class="thumb-info">
					<div class="thumb-title">Crop up</div>
					<div class="thumb-subtitle">Studio</div>
				</div>
			</div>


		</div>


	</div>

	<div class="container">
		
		<div class="row">
			
			<div class="col-md-12 col-sm-12 wow fadeInUp " data-wow-delay="0.3s">
		        <div class="section-title text-center">
		            <h1>Липецк фото</h1>
		        </div>
  			</div>

			<p>@ huykon225 Вашей информации недостаточно. Задайте новый вопрос и добавьте пример Minimal, Complete и Verifiable . Чем более подробно вы расскажете о том, что вы уже сделали, и о трудностях, с которыми вы столкнулись, тем скорее кто-то из сообщества предложит вам подходящее решение. -</p>


			<div class="gallery-list">

				<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="0.2s"">
					<div class="tt-page">
						<div class="tt-page-img-wrap">
							<a class="tt-page-img" style="width: 100%;" href="{{action('MainController@detail')}}" style="background-image: url(http://themebubble.com/demo/photosy/wp-content/uploads/2018/06/beach.jpg)"><i class="fa fa-instagram"></i></a>


						</div>
					</div>
				</div>

			</div>

		</div>

	</div>


@endsection