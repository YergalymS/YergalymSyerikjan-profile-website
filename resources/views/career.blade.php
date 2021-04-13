<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Portfolio</title>
</head>
<body>
<header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/">Portfolio</a>
                </div>
                <div class="header__nav">
                    <ul>
                        <li><a href="{{ url(app()->getLocale() . '/about') }}">{{__('welcome.about')}}</a></li>
                        <li><a href="{{ url(app()->getLocale() . '/career') }}">{{__('welcome.career')}}</a></li>
                        <li><a href="{{ url(app()->getLocale() . '/contact') }}">{{__('welcome.contact')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="advantages">
        <div class="container">
            <div class="title advantages__title">
                <p>{{__('welcome.career')}}</p>
            </div>
            <div class="line advantages__line"></div>
            <div class="text advantages__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="advantages__items">
                <div class="advantages__item">
                    <div class="advantages__item-img">
                        <img src="{{asset('images/advantages1.png')}}" alt="">
                    </div>
                    <div class="advantages__item-title">
                        <p>{{__('welcome.developer')}}</p>
                    </div>
                    <div class="advantages__item-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Aenean euismod bibendum laoreet. Proin gravida 
                            dolor sit amet lacus accumsan et viverra.</p>
                    </div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-img">
                        <img src="{{asset('images/advantages2.png')}}" alt="">
                    </div>
                    <div class="advantages__item-title">
                        <p>{{__('welcome.programmer')}}</p>
                    </div>
                    <div class="advantages__item-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Aenean euismod bibendum laoreet. Proin gravida 
                            dolor sit amet lacus accumsan et viverra.</p>
                    </div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-img">
                        <img src="{{asset('images/advantages3.png')}}" alt="">
                    </div>
                    <div class="advantages__item-title">
                        <p>{{__('welcome.critical thinker')}}</p>
                    </div>
                    <div class="advantages__item-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Aenean euismod bibendum laoreet. Proin gravida 
                            dolor sit amet lacus accumsan et viverra.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer__img">
                <img src="{{asset('images/footer.png')}}" alt="">
            </div>
            <div class="footer__text">
                <p>© 2021 Axure Themes</p>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>