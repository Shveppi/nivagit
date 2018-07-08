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