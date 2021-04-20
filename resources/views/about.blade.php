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
    <section class="sub">
        <div class="container">
            <div class="sub__wrapper">
                <div class="picture sub__img">
                    <img src="{{asset('images/profile.jpg')}}" alt="" width="450px">
                </div>
                <div class="sub__info">
                    <div class="title sub__title">
                        <p>{{__('welcome.about me')}}</p>
                    </div>
                    <div class="line sub__line"></div>
                    <div class="text sub__text">
                        <p>{{__('welcome.info')}}</p>
                    </div>
                    <div class="sub__items">
                        <div class="sub__item">
                            <div class="sub__item-img">
                                <img src="{{asset('images/Group 1.png')}}" alt="">
                            </div>
                            <div class="sub__item-info">
                                <div class="sub__item-title">
                                    <p>{{__('welcome.interests')}}</p>
                                </div>
                                <div class="sub__item-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis reprehenderit incidunt recusandae, alias facilis quia quibusdam rerum assumenda laborum similique nam qui, ipsam eveniet, impedit tempore accusamus ut aperiam soluta!</p>
                                </div>
                            </div>
                        </div>
                        
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
                <p>© 2021 Portfolio</p>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>