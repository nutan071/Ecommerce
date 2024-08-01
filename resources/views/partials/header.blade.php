 <!-- Page Preloder -->
 <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <!-- <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>

        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{ asset('/img/icon/search.png') }}" alt=""></a>

            <a href="#"><img src="{{ asset('/img/icon/heart.png' ) }}"alt=""></a>
            <a href="#"><img src="{{ asset('img/icon/cart.png')}}" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div> -->
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
<<<<<<< HEAD
                            <div  class="header__top__links">
                                <!-- <img src="{{asset('img/profile.png')}}" width="50px" height="50px" alt="">     -->
                                <a href="{{ route('profile.orders') }}">PROFILE</a>
                               
                            </div>

                            


                            <div  class="header__top__links">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <button type="submit">Logout</button>
                                </form>
=======
                            <div>
                                <a href="{{route('cart.index')}}">PROFILE</a>
>>>>>>> b3136abe432d0ac827e3f08bcd28b7c4964da084
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ route('user.dashboard') }}">Home</a></li>
                            <li class="active"><a href="{{route('Admin.products.table')}}">Product</a></li>
                            <li><a href="{{route('Admin.user.table')}}">User Details</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('Admin.wishlist.table')}}">wishlist</a></li>
                                    <li><a href="{{route('Admin.order.table')}}"> order list</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{ asset('/img/icon/search.png') }}" alt=""></a>
                        <a href="{{ route('wishlist.index') }}"><img src="{{ asset('img/icon/heart.png') }}" alt="Wishlist"><span>{{ Auth::check() ? Auth::user()->wishlist()->count() : '0' }}</span></a>
                        <a href="{{route('cart.index')}}"><img src="{{ asset('img/icon/cart.png')}}" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
