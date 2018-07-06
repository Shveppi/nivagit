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
  {{--Html::style(asset('/fronpo/css/shuffle-styles.css'))--}}
  {{Html::style(asset('/fronpo/css/style.css'))}}

	<!-- Google web font  -->
  {{Html::style(asset('//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300'))}}
	
</head>
<body @if(Request::path() == '/')class="vegas-img"@endif id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- Preloader section -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section  -->
@include('beauty.include.menu')

<!-- Home section -->



@if(Request::path() == '/')

  <section id="home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">

        <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
            <h1 class="wow fadeInUp" data-wow-delay="0.6s">Божья <strong style="color: #FFC074">НИВА</strong></h1>
            <p class="wow fadeInUp" data-wow-delay="0.9s"><i>Церковь христиан веры евангельской (пятидесятников) "Божья нива"<br/>город Липецк, Липецкая область.</i></p>
          {{--<a href="#about" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Learn more</a>--}}
        </div>

      </div>
    </div>
  </section>

@else
  
  @section('section-head')
    <div class="section-bg">
      <div class="section-img"></div>
    </div>
  @show

@endif

<!-- About section -->

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

<!-- Gallery section -->


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

  {{--

      <ul class="grid cs-style-3">
        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="fronpo/images/gallery-img1.jpg" alt="image 1"></div>
            <figcaption>
              <h1>Sapien arcu</h1>
              <small>Cum sociis natoque penatibus et magnis dis parturient montes.</small>
              <a href="#">Read More</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="fronpo/images/gallery-img2.jpg" alt="image 2"></div>
            <figcaption>
              <h1>Aliquam erat</h1>
              <small>Suspendisse venenatis quam sed libero euismod feugiat.</small>
              <a href="#">Details</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="fronpo/images/gallery-img3.jpg" alt="image 3"></div>
            <figcaption>
              <h1>Cras ante sem</h1>
              <small>Aenean urna massa, convallis vehicula velit et, dictum pellentesque nisi.</small>
              <a href="#">Learn More</a>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="fronpo/images/gallery-img4.jpg" alt="image 4"></div>
            <figcaption>
              <h1>Sed ornare</h1>
              <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
              <a href="#">Full Post</a>
            </figcaption>
          </figure>
        </li>
      </ul>

      --}}


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


<br />
    <hr>


  
<div id="grid" class="gallery-list col-md-12">
      
    @php
      
      $group = ['', 'nature', 'animal', 'city', 'nature'];

    @endphp

          
@for ($i = 1; $i <= 4; $i++)
    
  
  <figure class="picture-item gallery-item" data-groups='["{{$group[$i]}}", "all"]'>

    <a class="gallery-img" data-fancybox="images" href="/fronpo/images/gallery-img{{$i}}.jpg"><img src="/fronpo/images/gallery-img{{$i}}.jpg" height="250px"><i class="fa fa-instagram"></i></a>
    <div class="my-sizer-element" style="width:auto;"></div>
  </figure>


@endfor

  <figure class="picture-item gallery-item" data-groups='["city", "all"]'>

    <a class="gallery-img" data-fancybox="images" href="http://responsv.com/flexible-math/img/explanation.png"><img src="http://responsv.com/flexible-math/img/explanation.png" height="250px"><i class="fa fa-instagram"></i></a>
    <div class="my-sizer-element" style="width:auto;"></div>
  </figure>

  @for ($i = 1; $i <= 4; $i++)
    
  
  <figure class="picture-item gallery-item" data-groups='["{{$group[$i]}}", "all"]'>

    <a class="gallery-img" data-fancybox="images" href="/fronpo/images/gallery-img{{$i}}.jpg"><img src="/fronpo/images/gallery-img{{$i}}.jpg" height="250px"><i class="fa fa-instagram"></i></a>
    <div class="my-sizer-element" style="width:auto;"></div>
  </figure>


  @endfor


{{--
<figure class="picture-item gallery-item col-4@sm" data-groups='["nature", "all"]'>
    <div class="aspect aspect--16x9">
      <div class="aspect__inner">
      <a class="gallery-img" data-fancybox="images" href="/fronpo/images/gallery-img2.jpg"><img src="/fronpo/images/gallery-img2.jpg"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
</figure>

<figure class="picture-item gallery-item col-4@sm" data-groups='["city", "all"]'>
    <div class="aspect aspect--16x9">
      <div class="aspect__inner">
        <a class="gallery-img" data-fancybox="images" href="/fronpo/images/team-img3.jpg"><img src="/fronpo/images/team-img3.jpg"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
</figure>


<figure class="picture-item gallery-item col-4@sm" data-groups='["animal", "all"]'>
    <div class="aspect aspect--16x9">
      <div class="aspect__inner">
      <a class="gallery-img" data-fancybox="images" href="/fronpo/images/gallery-img2.jpg"><img src="/fronpo/images/gallery-img2.jpg"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
</figure>

--}}

      
      
</div>








    </div>
  </div>
</section>


@endif
<!-- Contact section -->

@if(Request::path() == '/' || Request::path() == 'contact')
<section id="contact">
  <div class="container">
    <div class="row">

       <div class="col-md-offset-1 col-md-10 col-sm-12">

        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
          <h1>Наглядно где мы</h1>
          <p>Рекомендуем предварительно наглядно ознакомиться, где мы находимся.</p>
        </div>
      </div>
    <div style="clear: both;"></div>
    <div class="maps wow fadeInUp" data-wow-delay="0.4s">
       <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7455a0aababc5d6a0f31b6eb7c47d54e2b8540a8533549af62c3438c8f78c16b&amp;source=constructor" width="970" height="400" frameborder="0"></iframe>
    </div>
    <div style="clear: both;"></div>

    </div>
  </div>
</section>
@endif

<!-- Footer section -->


<footer>
	<div class="container">
    
		<div class="row">

			<div class="col-md-12 col-sm-12">
            
                <ul class="social-icon"> 
                    <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
                    <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
                    <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                    <li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                    <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="1.0s"></a></li>
                </ul>

              <p class="wow fadeInUp"  data-wow-delay="1s" >Powered by <a href="//vk.com/shveppi" target="_blank">shveppi</a></p>
                
			</div>
			
		</div>
        
	</div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->

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
{{Html::script(asset('/fronpo/js/mixitup.min.js'))}}
{{Html::script(asset('/fronpo/js/custom.js'))}}

</body>
</html>