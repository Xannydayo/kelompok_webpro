<header>
    <!-- top Header -->
    <div id="top-header">
        <div class="container">
            <div class="pull-left">
                <span>Selamat datang di Sayur.id</span>
            </div>
        </div>
    </div>
    <!-- /top Header -->

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="#">
                        <img src="{{ asset('image/logo.png') }}" alt="">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->

                <!-- /Search -->
            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <strong class="text-uppercase">Keranjang</strong>
                        </a>
                    </li>
                    <!-- /Cart -->

                    <!-- Account -->
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">
                                @auth
                                    {{ auth()->user()->nama }} <i class="fa fa-caret-down"></i>
                                @else
                                    Akun Saya <i class="fa fa-caret-down"></i>
                                @endauth
                            </strong>
                        </div>
                    
                        <ul class="custom-menu">
                            @auth
                                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                                <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logoutpelanggan') }}">
                                        @csrf
                                        <button type="submit" style="background:none;border:none;padding:0;margin:0;color:#333;cursor:pointer;">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                <li><a href="/register"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            @endauth
                        </ul>
                    </li>
                    <!-- /Account -->

                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>