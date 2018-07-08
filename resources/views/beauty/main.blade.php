<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Божья нива</title>

  {{Html::style(asset('/fronpo/css/bootstrap.min.css'))}}
  {{Html::style(asset('/fronpo/css/animate.min.css'))}}
  {{Html::style(asset('/fronpo/css/font-awesome.min.css'))}}
  {{Html::style(asset('/fronpo/css/component.css'))}}
  {{Html::style(asset('/fronpo/css/owl.theme.css'))}}
  {{Html::style(asset('/fronpo/css/owl.carousel.css'))}}
  {{Html::style(asset('/fronpo/css/vegas.min.css'))}}
  {{Html::style(asset('/fronpo/css/jquery.fancybox.min.css'))}}
  {{Html::style(asset('/fronpo/css/shuffle-styles.css'))}}
  {{Html::style(asset('/fronpo/css/style.css'))}}

{{--	<!-- Google web font  -->--}}
  {{Html::style(asset('//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300'))}}
	
</head>
<body @if(Request::path() == '/')class="vegas-img"@endif id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


{{--<!-- Предзагрузка -->--}}

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


{{--<!-- Меню  -->--}}
@include('beauty.include.menu')

{{--<!-- Верхняя картинка -->--}}
@section('section-head')
@include('beauty.include.head-bg')
@show

{{--<!-- Контент -->--}}

@if(Request::path() == '/')
<section id="about">
  <div class="container">
    <div class="row">

      @yield('content')

    </div>
  </div>
</section>

@else

@section('block-title')
  <section id="head-title" style="text-align: center">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title">
            <h1>@yield('title', 'Главная')</h1>
        </div>
      </div>

    </div>
  </div>
</section>
@show

<section id="content">

      @yield('content')

      
</section>

@endif


{{--<!-- Галерея -->--}}

@if(Request::path() == '/')
<section id="gallery">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title">
          <h1>Gallery</h1>
          <p>Nullam scelerisque, quam nec iaculis vulputate, arcu ligula sollicitudin nisl, ac volutpat erat nulla a arcu.</p>
        </div>
      </div>


<div class="col-md-4">
      <div class="filters-group">
          <p class="filter-label">Filter</p>
          <div class="btn-group filter-options">
            <button class="btn" data-group="all">All</button>
            <button class="btn" data-group="nature">Nature</button>
            <button class="btn" data-group="animal">Animal</button>
            <button class="btn" data-group="city">City</button>
          </div>
        </div>
</div>


  
<div id="grid" class="gallery-list col-md-12">
      
    @php
      
      $group = ['', 'nature', 'animal', 'city', 'nature'];

    @endphp

          
@for ($i = 1; $i <= 4; $i++)


  <div class="col-md-4 col-sm-6 galppp" data-groups='["{{$group[$i]}}", "all"]'>
    <div class="tt-page">
      <div class="tt-page-img-wrap">
        <a class="tt-page-img" href="{{action('MainController@detail')}}" style="background-image: url(http://themebubble.com/demo/photosy/wp-content/uploads/2018/06/beach.jpg)"></a>
      </div>
      <a class="tt-page-title" href="{{action('MainController@detail')}}">One Page</a>
    </div>
  </div>


  {{--<figure class="picture-item gallery-item col-md-4 col-sm-6 col-xs-6" data-groups='["{{$group[$i]}}", "all"]'>
    <a class="gallery-img" data-fancybox="images" href="/fronpo/images/gallery-img{{$i}}.jpg"><img src="/fronpo/images/gallery-img{{$i}}.jpg"><i class="fa fa-instagram"></i></a>
  </figure>--}}


@endfor

  {{--<figure class="picture-item gallery-item col-md-4 col-sm-6 col-xs-6" data-groups='["city", "all"]'>
    <a class="gallery-img" data-fancybox="images" href="http://responsv.com/flexible-math/img/explanation.png"><img src="http://responsv.com/flexible-math/img/explanation.png""><i class="fa fa-instagram"></i></a>
  </figure>

  @for ($i = 1; $i <= 4; $i++)
    
  
  <figure class=  "picture-item gallery-item col-md-4 col-sm-6 col-xs-6" data-groups='["{{$group[$i]}}", "all"]'>
    <a class="gallery-img" data-fancybox="images" href="/fronpo/images/gallery-img{{$i}}.jpg"><img src="/fronpo/images/gallery-img{{$i}}.jpg"><i class="fa fa-instagram"></i></a>
  </figure>


  @endfor--}}

    <div class="my-sizer-element col-md-4 col-sm-6" ></div>

      
      
</div>








    </div>
  </div>
</section>


@endif


{{-- карта и футер блок --}}
@include('beauty.include.footer')



<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


{{Html::script(asset('/fronpo/js/jquery.js'))}}
{{Html::script(asset('/fronpo/js/bootstrap.min.js'))}}
{{Html::script(asset('/fronpo/js/vegas.min.js'))}}
{{Html::script(asset('/fronpo/js/modernizr.custom.js'))}}
{{Html::script(asset('/fronpo/js/toucheffects.js'))}}
{{Html::script(asset('/fronpo/js/owl.carousel.min.js'))}}
{{Html::script(asset('/fronpo/js/smoothscroll.js'))}}
{{Html::script(asset('/fronpo/js/wow.min.js'))}}
{{Html::script(asset('/fronpo/js/jquery.fancybox.min.js'))}}
{{Html::script(asset('/fronpo/js/shuffle.js'))}}
{{Html::script(asset('/fronpo/js/jquery.mosaicflow.min.js'))}}
{{--@if(Request::path() == '/')
    {{Html::script(asset('/fronpo/js/mixitup.min.js'))}}
@endif--}}
{{Html::script(asset('/fronpo/js/custom.js'))}}
{{--@if(Request::path() == '/')
<script>
var mixer = mixitup('.mix-container');
</script>
@endif--}}
</body>
</html>