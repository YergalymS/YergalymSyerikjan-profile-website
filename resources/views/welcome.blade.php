<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
                        <li><a href="{{ url(app()->getLocale() . '/about') }}">{{__("welcome.about")}}</a></li>
                        <li><a href="{{ url(app()->getLocale() . '/career') }}">{{__("welcome.career")}}</a></li>
                        <li><a href="{{ url(app()->getLocale() . '/contact') }}">{{__("welcome.contact")}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="form">
        <div class="container">
            <div class="form__wrapper">
                <div class="form__about">
                    <div class="form__logo">
                        Yergalym Syerikjan
                    </div>
                    
                    <div class="form__title">
                        <h1>{{__('welcome.specialty')}}</h1>
                    </div>
                    <div class="form__line"></div>
                    
                    <div class="form__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                            euismod bibendum laoreet. Proin gravida dolor sit amet lacus
                            accumsan et viverra justo commodo.</p>
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
</body>
</html>