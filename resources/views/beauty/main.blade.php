<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Божья нива</title>

  {{Html::style(asset('fronpo/css/bootstrap.min.css'))}}
  {{Html::style(asset('fronpo/css/animate.min.css'))}}
  {{Html::style(asset('fronpo/css/font-awesome.min.css'))}}
  {{Html::style(asset('fronpo/css/component.css'))}}
  {{Html::style(asset('fronpo/css/owl.theme.css'))}}
  {{Html::style(asset('fronpo/css/owl.carousel.css'))}}
  {{Html::style(asset('fronpo/css/vegas.min.css'))}}
  {{Html::style(asset('fronpo/css/style.css'))}}

	<!-- Google web font  -->
  {{Html::style(asset('//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300'))}}
	
</head>
<body class="vegas-img" id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


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
            <p class="wow fadeInUp" data-wow-delay="0.9s"><i>Церковь христиан веры евангельской (пятидесятников) "Божья нива" г. Липецка.</i></p>
          {{--<a href="#about" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Learn more</a>--}}
        </div>

      </div>
    </div>
  </section>

@else

    <section class="small-screen image-bg p0" style="opacity: 0.9; background: #304352;">
        <div class="parallax-window " data-parallax="scroll" data-speed="1.2" data-position="-500px 0px" data-image-src="https://cdn.colorlib.com/shapely/wp-content/uploads/sites/12/2016/12/photo-1451417379553-15d8e8f49cde.jpg" data-ios-fix="true" data-over-scroll-fix="true" data-android-fix="true">
            <div style="height: 250px;"></div>
        </div>
    </section>

@endif

<!-- About section -->


<section id="about">
  <div class="container">
    <div class="row">

      @yield('content')

    </div>
  </div>
</section>

<!-- Gallery section -->

<section id="gallery">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title">
          <h1>Gallery</h1>
          <p>Nullam scelerisque, quam nec iaculis vulputate, arcu ligula sollicitudin nisl, ac volutpat erat nulla a arcu.</p>
        </div>
      </div>

      <ul class="grid cs-style-4">
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

    </div>
  </div>
</section>


<!-- Contact section -->

<section id="contact">
  <div class="container">
    <div class="row">

       <div class="col-md-offset-1 col-md-10 col-sm-12">

        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
          <h1>Send a message</h1>
          <p>Nunc suscipit ante in lectus laoreet, nec pharetra diam dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>

        <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
          <div class="col-md-6 col-sm-6">
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
          </div>
          <div class="col-md-6 col-sm-6">
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="col-md-12 col-sm-12">
            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
          </div>
          <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
            <input type="submit" class="form-control" value="SEND MESSAGE">
          </div>
        </form>

      </div>

    </div>
  </div>
</section>


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

              <p class="wow fadeInUp"  data-wow-delay="1s" >Powered by <a href="//vk.com/shveppi">shveppi</a></p>
                
			</div>
			
		</div>
        
	</div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->

{{Html::script(asset('fronpo/js/jquery.js'))}}
{{Html::script(asset('fronpo/js/bootstrap.min.js'))}}
{{Html::script(asset('fronpo/js/vegas.min.js'))}}
{{Html::script(asset('fronpo/js/modernizr.custom.js'))}}
{{Html::script(asset('fronpo/js/toucheffects.js'))}}
{{Html::script(asset('fronpo/js/owl.carousel.min.js'))}}
{{Html::script(asset('fronpo/js/smoothscroll.js'))}}
{{Html::script(asset('fronpo/js/wow.min.js'))}}
{{Html::script(asset('fronpo/js/parallax.js'))}}
{{Html::script(asset('fronpo/js/custom.js'))}}

</body>
</html>