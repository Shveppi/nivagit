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


    <div class="section-bg">
        <div class="section-img"></div>
    </div>


@endif