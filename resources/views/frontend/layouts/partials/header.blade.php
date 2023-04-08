<!-- Main Header-->
<header class="main-header box-shadow" style="background-color:#FCE5CD;box-shadow: 0 0 8px 0 rgba(0,0,0,.4);">

    <nav class="navbar navbar-expand-lg navbar-light" style="width: 100% !important; padding-top: 0px; padding-bottom: 0px; background-color: #FCE5CD;">

        <div class="container">
            @if (isset($companylogo))
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="{{asset( $companylogo->dark_logo )}}" alt="">
            </a>
            @else
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="{{asset('assets/frontend/img/logo-mic.png')}}" alt="">
            </a>
            @endif

            
            <div class="d-flex flex-row align-items-center">
                <div class="cart-icon cart-icon-mobile">
                    <a href="{{ route('cart_index') }}"> <i class="fas fa-cart-shopping"></i><span class="cartvalue"> {{ isset($productIds) && is_array($productIds) ? count($productIds) : 0 }} </span></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="{{ route('home_index') }}">Customize</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop_index') }}">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery_index') }}">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about_index') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact_index') }}">Contact</a>
                    </li>

                    <li class="nav-item ordertraking">
                        <a class="nav-link" href="#"> Order Track </a>
                    </li>
                </ul>

                <form action="{{ route('searchResult') }}" autocomplete="off" class="d-flex justify-content-lg-end justify-content-start" style="position: relative !important;">
                    <div class="input-group rounded">
                        <input class="form-control search-product" name="key" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn d-flex justify-content-center" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <div id="my-list"></div>
                </form>

                <div class="cart-icon cart-icon-desktop">
                    <a href="{{ route('cart_index') }}"> <i class="fas fa-cart-shopping"></i><span class="cartvalue"> {{ isset($productIds) && is_array($productIds) ? count($productIds) : 0 }} </span></a>
                </div>

                <div class="cart-icon ps-3 dropdown">
                    <a href="{{ route('cart_index') }}" class="dropdown-toggle-no-arrow" id="user-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="user-dropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </nav>

</header>