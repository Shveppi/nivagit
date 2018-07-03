@extends('beauty.main')

@section('content')

<div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
    <div class="about-thumb">
        <h1>Приветствуем</h1>
        <p>Если ты хочешь узнать Бога, найти друзей.<br />
            Если тебе нужна помощь или поддержка.<br />
            Если ты хочешь изменить свою жизнь, или просто узнать, что мы делаем в церкви, то ждем тебя каждое воскресенье в 11:00.</p>
        <p>Наш адрес: город Липецк, проспект Ударников 24а (сырский рудник)<br /> Ориентир: остановка "школа 23")</p>
    </div>
</div>

<div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
    <img src="https://instagram.fhen1-1.fna.fbcdn.net/vp/2ac70ee4677794884812f8b8cea1b1bb/5BB330CA/t51.2885-19/s320x320/12135369_1671321816445774_1145352099_a.jpg" class="img-responsive img-circle" alt="About">
</div>

<div class="clearfix"></div>

<div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
    <div class="section-title text-center">
        <h1>Анонс</h1>
        <h3>События церкви</h3>
    </div>
</div>

<!-- team carousel -->
<div id="team-carousel" class="owl-carousel">

    <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="team-thumb">
            <div class="image-holder">
                <img src="fronpo/images/team-img1.jpg" class="img-responsive img-circle" alt="Mary">
            </div>
            <h2 class="heading">Mary, CEO</h2>
            <p class="description">Aliquam ac justo est. Praesent feugiat cursus est.</p>
        </div>
    </div>

    <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="team-thumb">
            <div class="image-holder">
                <img src="fronpo/images/team-img2.jpg" class="img-responsive img-circle" alt="Jack">
            </div>
            <h2 class="heading">Jack, Founder</h2>
            <p class="description">Maecenas sed diam eget risus varius blandit sit non.</p>
        </div>
    </div>

    <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
            <div class="image-holder">
                <img src="fronpo/images/team-img3.jpg" class="img-responsive img-circle" alt="Linda">
            </div>
            <h2 class="heading">Linda, Manager</h2>
            <p class="description">Phasellus nec ante in nunc molestie tincidunt ut eu diam.</p>
        </div>
    </div>

    <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
            <div class="image-holder">
                <img src="fronpo/images/team-img4.jpg" class="img-responsive img-circle" alt="Sandy">
            </div>
            <h2 class="heading">Sandy, Director</h2>
            <p class="description">Curabitur vulputate euismod neque et tincidunt.</p>
        </div>
    </div>

    <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
            <div class="image-holder">
                <img src="fronpo/images/team-img5.jpg" class="img-responsive img-circle" alt="Lukia">
            </div>
            <h2 class="heading">Lukia, Fashion</h2>
            <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
        </div>
    </div>

    <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
            <div class="image-holder">
                <img src="fronpo/images/team-img6.jpg" class="img-responsive img-circle" alt="George">
            </div>
            <h2 class="heading">George, Admin</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        </div>
    </div>

    <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
            <div class="image-holder">
                <img src="fronpo/images/team-img7.jpg" class="img-responsive img-circle" alt="Day">
            </div>
            <h2 class="heading">Day, Accountant</h2>
            <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
        </div>
    </div>

    <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
            <div class="image-holder">
                <img src="fronpo/images/team-img8.jpg" class="img-responsive img-circle" alt="Lynn">
            </div>
            <h2 class="heading">Lynn, Marketing</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        </div>
    </div>

</div>
<!-- end team carousel -->


@endsection