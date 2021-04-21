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
                        <li class="nav-item-dropdown">
                            <a class="nav-link-dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Config::get('languages')[App::getLocale()] }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                @endif
                            @endforeach
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </header>
    <section class="form">
        {{-- <img src="{{asset('images/background.jpg')}}" alt=""> --}}
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
                        <p style="font-size: 20px">{{__('welcome.full')}}</p>
                    </div>
                    <div class="form__image">
                        <img src="{{asset('images/picture1.jfif')}}" alt="" width="470px">
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
</body>
</html>