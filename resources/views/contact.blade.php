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
    <section class="contact">
        <div class="container">
            <div class="title contact__title">
                <p>{{__('welcome.contact')}}</p>
            </div>
            <div class="line contact__line"></div>
            <div class="text contact__text">
                <p>{{__('welcome.question')}}</p>
            </div>
            <form method="POST" class="input_fields" action="{{url('/send')}}" action="{{url('/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="contact__wrapper">
                    <div class="content__wrapper-left">
                            <input type="text" name="name" placeholder="{{__('welcome.name')}}">
                            <input type="text" name="email" placeholder="{{__('welcome.email')}}">
                            <input type="text" name="subject" placeholder="{{__('welcome.subject')}}">
                    </div>
                    <div class="content__wrapper-right">
                        <input class="form-control" type="file" name="file">
                        <textarea name="message" placeholder="{{__('welcome.message')}}"></textarea>
                    </div>
                </div>
                
                <div class="content__btn">
                    <button type="submit">{{__('welcome.send message')}}</button>
                    
                </div>
            </form>
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