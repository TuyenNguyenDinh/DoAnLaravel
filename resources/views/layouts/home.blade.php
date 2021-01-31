<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop A-Z</title>
    <link rel="stylesheet" href="{{asset('css/frontend/bootstrap.min.frontend.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script type="text/javascript" src="{{asset('js/frontend/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('js/frontend/bootstrap.min.js')}}"></script>


    <script type="text/javascript">
        $(function() {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("backtotop").style.display = "block";
            } else {
                document.getElementById("backtotop").style.display = "none";
            }
        }


        function topFunction() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            document.documentElement.scrollTop = 0;
        }
    </script>
</head>

<body class="preload">
    <div id="container">
        <header>
            <nav id="navbar-header">
                <div class="header">
                    <div class="hidden-sm hidden-xs header">
                        <div class="head-main backgound-primary">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="line">
                                            <div class="logo col-logo">
                                                <a href="{{ url('/') }}">
                                                    <img src="{{asset('image/logo.png')}}" alt="shopA_Z" height="38px" width="144px">
                                                </a>
                                            </div>
                                            <div class="col-nav nav-menu">
                                                <button class="dropbtn btn btn-secondary" type="buttom">
                                                    <i class="fas fa-bars"></i>
                                                    Danh mục
                                                </button>
                                                <div class="dropdown-content">
                                                    @foreach($categories as $category)
                                                    <a href="{{asset('category/'.$category->id.'.html')}}">{{$category->name}}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="search">
                                            <form action="{{asset('search/')}}" role="search" method="GET" class="full-width">
                                                <!-- Search form -->
                                                <input class="form-control" type="text" name="result" placeholder="Nhập từ khóa..." aria-label="Search">
                                                <button type="submit" class="color-b9 font-size-18">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- cart -->
                                        <a class="display" href="{{asset('cart/show')}}">
                                            <img src="{{asset('image/icon-cart.png')}}" height="38px" width="38px" style="margin-left: 40px">
                                            <a style="color: white;">{{Cart::count()}}</a>
                                        </a>
                                        <!-- cart -->
                                        <div class="header-account main_account pull-right">
                                            @guest
                                            <a href="{{route('login')}}" class="btn-sign">Đăng nhập</a>
                                            @if (Route::has('register'))
                                            <a href="{{route('register')}}" class="btn btn-login btn-secondary">Đăng ký</a>
                                            @endif
                                            @else
                                            <div class="stick-nav-home">
                                                <button class="btn btn-secondary button-user" type="button" aria-haspopup="true" title="{{ Auth::user()->name }}" aria-expanded="false" style="max-width: 69.88px">
                                                    <a href="{{route('admin')}}" style="color:white">{{ Auth::user()->name }}</a>
                                                </button>
                                                <button class="btn btn-secondary" href="{{ route('logout') }}" type="button" aria-haspopup="true" aria-expanded="false">
                                                    <a id="navbarDropdown" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: white;">
                                                        {{ __('Logout') }}
                                                    </a>
                                                </button>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Mobile -->

            <nav id="navbar-header-mobile">
                <div class="navbar navbar-dark header-mobile">
                    <div class="header-preload">
                        <button class="header__button" id="btnNav" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <nav class="nav">
                        <div class="nav__links">
                            @foreach ($categories as $category)
                            <a href="{{asset('category/'.$category->id.'.html')}}" class="nav__link">
                                {{$category->name}}
                            </a>
                            @endforeach
                        </div>
                        <div class="nav__overlay"></div>
                    </nav>
                    <div class="header-mobile-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{asset('image/logo.png')}}" alt="shopA_Z" height="38px" width="144px">
                        </a>
                    </div>
                    <div class="header-preload1">
                        <nav class="nav1">
                            <div class="nav__links1">
                                @guest
                                <a href="{{route('login')}}" class="nav__link1">Đăng nhập</a>
                                @if (Route::has('register'))
                                <a href="{{route('register')}}" class="nav__link1" style="border-top: 1px solid ;">Đăng ký</a>
                                @endif
                                @else
                                <div class="header-profile__avt">
                                    <div class="header-profile__avt-image">
                                        <a class="account_current_user">
                                            <img src="{{asset('image/avt.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="header-profile__avt-name">
                                        {{ Auth::user()->name }}
                                    </div>
                                    <div class="header-profile__avt-email">
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>
                                <a href="{{asset('cart/show')}}" class="nav__link1">
                                    <i class="fas fa-shopping-cart"></i> Giỏ hàng ({{Cart::count()}})
                                </a>
                                <a href="{{ route('logout') }}" class="nav__link1" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" style="color: white;">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @endguest
                            </div>
                            <div class="nav__overlay1"></div>
                        </nav>
                        <button class="header__button1" id="btnNav1" type="button">
                            <a class="header-mobile__right_btn" style="color: white;">
                                <i class="fa fa-user"></i>
                            </a>
                        </button>
                    </div>
                </div>
                <div class="header-mobile-search">
                    <div class="col-md-12">
                        <form action="{{asset('search/')}}" method="GET" class="full-width">
                            <!-- Search form -->
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                            <button type="submit" class="color-b9 font-size-18">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

        </header>

        <section id="body">
            <div class="container">
                <div class="row">
                    @yield('main')
                </div>
            </div>
        </section>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About us</h6>
                        <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Categories</h6>
                        <ul class="footer-links">
                            @foreach($categories as $category)
                            <li><a href="{{asset('category/'.$category->id.'.html')}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Contribute</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                            <a href="#">Nguyễn Đình Tuyên</a>.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="https://www.facebook.com/ghosterkrilex"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fab fa-dribbble-square"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <button onclick="topFunction()" id="backtotop" title="Go to top" class="btn"><i class="fa fa-arrow-up"></i></button>
                </div>
            </div>
        </footer>
    </div>
</body>

<script>
    window.addEventListener("load", () => {
        document.body.classList.remove("preload");
    });

    document.addEventListener("DOMContentLoaded", () => {
        const nav = document.querySelector(".nav1");

        document.querySelector("#btnNav1").addEventListener("click", () => {
            nav.classList.add("nav--open1");
        });

        document.querySelector(".nav__overlay1").addEventListener("click", () => {
            nav.classList.remove("nav--open1");
        });
    });
</script>
<script>
    window.addEventListener("load", () => {
        document.body.classList.remove("preload");
    });

    document.addEventListener("DOMContentLoaded", () => {
        const nav = document.querySelector(".nav");

        document.querySelector("#btnNav").addEventListener("click", () => {
            nav.classList.add("nav--open");
        });

        document.querySelector(".nav__overlay").addEventListener("click", () => {
            nav.classList.remove("nav--open");
        });
    });
</script>




</html>