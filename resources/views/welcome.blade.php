<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="megakassa" content="7620f9edf72">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <title>Green-Bets</title>


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nivo-lightbox/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nivo-lightbox/nivo-lightbox-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


    <script src="{{asset('assets/js/modernizr.custom.js')}}"></script>


</head>

<body>

<a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>

<section id="header" class="header">
    <div class="top-bar">
        <div class="container">
            <div class="navigation" id="navigation-scroll">
                <div class="row">
                    <div class="col-md-11 col-xs-10">
                        <a href="#header"><span id="logo"><strong class="strong">G</strong>B</span></a>
                    </div>

                    <div class="col-md-1 col-xs-2">
                        <p class="nav-button">
                            <button id="trigger-overlay" type="button">
                                <i class="fa fa-bars"></i>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="starting">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/logo-lepestok.png')}}" alt="LUCY" class="wow flipInY animated animated">
                </div>
                <div class="col-md-6">
                    <div class="banner-text">
                        <h3 style="color:white;" class="animation-box wow bounceIn animated"><strong class="strong">Хотите зарабатывать на ставках в любое приятное для Вас время?</strong><br>
                            Команда Капперов
                            Готова Вам помочь!</h3>
                        <h4>
                            Мы специализируемся в различных видах спорта! Имеем свои прибыльные стратегии и лучших прогнозистов.
                            Каждый день Вы сможете получать бесплатные ставки по любым нашим контактам.
                            Вас интересует проход в 98%+? Мы имеем платный раздел, где Вы, сможе приобрести Платную ставку или Подписку на рассылку.
                            Цены Вас удивят, поверьте! Действуйте с выгодой для Вас.
                        </h4>
                        <br><br>
                        <a href="#pricing" class="btn btn-download wow animated fadeInLeft">
                            <i class="pull-left"></i>
                            <strong>Купить ставку</strong>
                            </a>
                        <a href="#contact" class="btn btn-download wow animated fadeInRight">
                            <i class="pull-left"></i>
                            <strong>Оставить отзыв</strong>
                             </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div id="video" class="wrapper">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Кто Мы?</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>


</div>

<section id="bigfeatures" class="img-block-3col wrapper">
    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <ul class="item-list-right item-list-big">

                    <li class="wow fadeInLeft animated"> <i class="fa fa-heart"></i>
                        <h3>Преимущество бесплатных прогнозов!</h3>
                        <p>Каждый день, Вы получаете ставку с хорошим коэффициентом совершенно бесплатно!
                            Вы можете ставить любую сумму, ибо не нужно окупать деньги за платный прогноз.
                            Проходимость более чем 75%.</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4 col-sm-push-4">
                <ul class="item-list-left item-list-big">

                    <li class="wow fadeInRight animated"> <i class="fa fa-lock"></i>
                        <h3>Преимущество платных прогнозов!</h3>
                        <p>Проходимость прогноза более 95%!
                            Вы можете выбирать любой подходящий для Вас коэффициент.
                            После покупки, Вы можете быть уверены, что каждый прогноз находится на Страховке. В случае проигрыша, Вы получаете приятные бонусы или замену прогноза, на более высокий коэффициент.
                            Мы всегда рады помочь и на связи 24/7.</p>
                    </li>

                </ul>
            </div>
            <div class="col-sm-4 col-sm-pull-4 text-center">
                <div class="animation-box wow bounceIn animated">
                    <img class="screen" src="{{asset('assets/img/333.png')}}" alt="" height="581" width="300">
                    <br><br><br>

                    <a class="btn btn-primary btn-lg" href="#pricing">Ты должен попробывать!</a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- HHHHHHHHHHHHHHHHHH        Speciality         HHHHHHHHHHHHHHHH -->
<div id="speciality" class="wrapper">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">гарантии</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-sm-4 wow animated fadeInLeft">
                <div class="special-icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <h3>Рейтинг Капперов</h3>
                <p>
                    Наши Капперы работают в сфере прогнозов, более 3-х лет.
                </p>
            </div>
            <div class="col-sm-4 animation-box wow bounceIn animated">
                <div class="special-icon">
                    <i class="fa fa-usd"></i>
                </div>
                <h3>Сертификаты</h3>
                <p>
                    Приём средств и получение Вами прогноза сертифицирован Нашими партнёрами, которые принимают оплату.
                </p>
            </div>
            <div class="col-sm-4 wow animated fadeInRight">
                <div class="special-icon">
                    <i class="fa fa-cogs"></i>
                </div>
                <h3>Страховка</h3>
                <p>
                    Даже при проиграшном прогнозе, Вы получаете бонусы или же скидки на покупку следующего.
                </p>
            </div>
        </div>
    </div>
</div>
<section id="gallery" class="wrapper">
    <div class="container">
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            @if($proofs->count()>0)
            <div class="col-xs-12">
                <h1 style="color:#333;">Скриншоты наших покупателей</h1>
                <div id="screenshots" class="owl-carousel owl-theme">
                    @foreach($proofs as $proof)
                    <a href="public/images/{!! $proof->img !!}" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="public/images/{!! $proof->img !!}" class="img_res wow animated zoomIn" alt="">
                    </a>
                        @endforeach
                </div>
                <div class="customNavigation row">
                    <a class="btn prev gallery-nav wow animated bounceInLeft"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn next gallery-nav wow animated bounceInRight"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            @endif
            @if($proofs->count() == 0)
                <h1 style="color:#333;"><a href="#contact">Ты будешь первым, кто поделиться своей победой!</a></h1>
                @endif
        </div>
    </div>
</section>
<section id="testimonial" class="wrapper">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8 col-md-offset-2">
                <div id="client-speech" class="owl-carousel owl-theme">
                    <div class="item wow animated bounceInUp animated">
                        @if($comments->count()>0)
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <h1>Отзывы наших клиентов.</h1>
                            </div>
                                @foreach($comments as $comment)
                                <div class="item">
                                    <h3 style="color:white;">Имя:<br> {!! $comment->name !!}<hr></h3>
                                    <br>
                                    <h3 style="color:white;">Отзыв:<br> {!! $comment->comment !!}<hr></h3>
                                </div>
                                @endforeach
                            </div>
                        </div>
                            @elseif($comments->count() == 0)
                            <h1 style="color:#333;"><a href="#contact">Ты будешь первым, кто поделиться своей победой!</a></h1>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="team" class="wrapper">
    <div class="container-fluid">
        <h2 class="animation-box wow bounceIn animated">Наша специализация</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-md-offset-3 wow animated fadeInLeft">
                <img src="{{asset('assets/img/foot.png')}}" alt="team">
                <img src="{{asset('assets/img/icon-p.png')}}" alt="icon-p" class="icon-p">
                <h3>Football</h3>
            </div>
            <div class="col-md-2 col-sm-4 animation-box wow bounceIn animated">
                <img src="{{asset('assets/img/basket.png')}}" alt="team">
                <img src="{{asset('assets/img/icon-p.png')}}" alt="icon-p" class="icon-p">
                <h3>Basketball</h3>
            </div>
            <div class="col-md-2 col-sm-4 wow animated fadeInRight">
                <img src="{{asset('assets/img/tennis.png')}}" alt="team">
                <img src="{{asset('assets/img/icon-p.png')}}" alt="icon-p" class="icon-p">
                <h3>Tennis</h3>
            </div>
        </div>
    </div>
</div>
<section id="pricing" class="wrapper">
    <div class="banner-overlay bg-color-grad"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <ul class="pricing-table">
                    @foreach($bets as $bet)
                    <li class="silver wow flipInY animated animated" data-wow-delay="0.2s" style="visibility: visible; -webkit-animation-delay: 0.2s;">
                        <h3>{!! $bet->title !!}</h3>
                        <span> {!! $bet->price !!}.rub <small>per month</small></span>
                        <ul class="benefits-list">
                            <li>{!! $bet->description !!}</li>
                        </ul>
                        <a href="#" target="_blank" class="buy"> <i class="fa fa-shopping-cart"></i></a>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="wrapper">
    <div  class="container">
        <div class="row">
            <div class="col-md-4 contact-item col-sm-6 col-xs-12 wow animated fadeInLeft">
                <i class="fa fa-map-marker"></i>
                <h3>Address</h3>
                <p class="contact">
                    Ukraine <br>
                </p>
            </div>
            <div class="col-md-4 contact-item col-sm-6 col-xs-12 wow animated fadeInLeft">
                <i class="fa fa-phone"></i>
                <h3>Phone</h3>
                <p class="contact">
                    Local: 1-200-123-hello <br>
                    Mobile: 2-800-123-hello
                </p>
            </div>
            <div class="col-md-4 contact-item col-sm-6 col-xs-12 wow animated fadeInRight">
                <i class="fa fa-envelope"></i>
                <h3>Email Address</h3>
                <p class="contact">
                    <a href="mailto:info@themewagon.com">support@green-bets.com</a> <br>
                    <a href="www.wal.com">www.wal.com</a>
                </p>
            </div>
        </div>
        <form method="post" action="{{route('commentAdd')}}" enctype="multipart/form-data" class="row form wrapper">
            <h3>Оставьте отзыв</h3>
            <div class="col-sm-4 col-xs-12 form-group">
                <label class="sr-only">Имя</label>
                <input name="name" class="form-control" type="text" placeholder="Имя(отображено на странице)" required>
            </div>
            <div class="col-sm-4 col-xs-12 form-group">
                <label class="sr-only">Email</label>
                <input name="email" class="form-control" type="email" placeholder="Email(доступен только администрации)" required>
            </div>
            <div class="col-sm-4 col-xs-12 form-group">
                <label for="proof">Скриншот доказательство</label>
                <input type="file" class="form-control-file" name="image" id="proof">
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 form-group">
                    <label class="sr-only">Сообщение</label>
                    <textarea class="message form-control" name="comment" placeholder="Оставьте отзыв" required></textarea>
                </div>
                <input class="btn btn-sub" type="submit" value="Send Message">
            </div>
            {{csrf_field()}}
        </form>
    </div>
</section>
<section id="footer" class="wrapper">
    <div class="container text-center">
        <div class="footer-logo">
            <h1 class="text-center animation-box wow bounceIn animated">GREEN-BETS</h1>
        </div>
        <ul class="social-icons text-center">
            <li class="wow animated fadeInLeft facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="wow animated fadeInRight twitter"><a href="#"><i class="fa fa-twitter"></i></a>
            <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li class="wow animated fadeInRight googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="wow animated fadeInLeft github"><a href="#"><i class="fa fa-github"></i></a>
        </ul>
        <div class="copyright">
            <div class="credits">
                Made With <i class="fa fa-heart"></i> by <a href="https://t.me/kmpcdr_hub" target="_blank">WaL</a>
            </div>
            <div>©2018 GREEN-BETS, All Rights Reserved</div>
        </div>
    </div>
</section>
<div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close">Close</button>
    <nav>
        <ul>
            <li class="hideit"><a href="#header">Домой</a></li>
            <li class="hideit"><a href="#bigfeatures">Немного о нас</a></li>
            <li class="hideit"><a href="#speciality">Гарантии</a></li>
            <li class="hideit"><a href="#testimonial">Отзывы</a></li>
            <li class="hideit"><a href="#contact">Связаться с нами</a></li>
        </ul>
    </nav>
</div>
<script src="{{asset('assets/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('assets/js/nivo-lightbox.min.js')}}"></script>
<script src="j{{asset('assets/js/smoothscroll.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/classie.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script>
    new WOW().init();
</script>
<script>
    $(document).ready(function(){
        $(".hideit").click(function(){
            $(".overlay").hide();
        });
        $("#trigger-overlay").click(function(){
            $(".overlay").show();
        });
    });
</script>
    <script>
        $('#myCarousel').on('slide.bs.carousel', function () {
            $('.carousel').carousel({
                interval: 4000
            })
        })
    </script>
    <script>
    $(document).ready(function(){

        var kawa = $('.top-bar');
        var back = $('#back-to-top');
        function scroll() {
            if ($(window).scrollTop() > 700) {
                kawa.addClass('fixed');
                back.addClass('show-top');

            } else {
                kawa.removeClass('fixed');
                back.removeClass('show-top');
            }
        }

        document.onscroll = scroll;
    });
</script>

<script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
</body>
</html>