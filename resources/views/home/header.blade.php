<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img src="img/logo.png" alt="" width="100"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7  d-flex justify-content-center">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a class="active" href="{{ url('shop') }}">Shop</a></li>
                            <li><a class="active" href="{{ url('contact') }}">Contact</a></li>
                           
    
                            @auth
                            <li><a >Cart</a>
                                <ul class="dropdown">
                                
                                <li><a href="{{url('showcrt')}}"> My Cart({{\App\Models\Cart::count()}})</a></li> 
                                <li><a href="{{url('show_order')}}">My Orders</a></li>   
                                    
                                </ul>
                            </li>
                            @endauth
                            <ul class="header__right__widget">
                                <form action="{{url('product_search')}}" method="GET">
                            <li><span class="icon_search search-switch"></span></li>
                                </form>
                        </ul>
                        </ul>
                        
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                       @if (Route::has('login'))
                       @Auth
                        <x-app-layout>
                        </x-app-layout>
                       @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                        @endif
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>