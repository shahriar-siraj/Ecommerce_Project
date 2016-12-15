<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')KenaKata.com | Largest Online Shopping Site in Bangladesh</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    <link href="/css/styles.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <div id="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="{!! url('/') !!}">Kenakata</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="{!! url('/') !!}">Home</a></li>
                        <li class="dropdown">
                            <a id="page1" class="dropdown-toggle" data-toggle="dropdown" href="#">Men's Fashion<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tshirts</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Pants</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a id="page1" class="dropdown-toggle" data-toggle="dropdown" href="#">Women's Fashion<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Pants & Leggings</a></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                     
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span>    Login</a></li>
                        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>    Register</a></li>
                    @else
                        <li>
                            <a href="{{ route('carts.index') }}">
                                Cart                            </a>
                        </li>
                        <li class="dropdown">
                            <a id="accountname" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('purchasedproducts.index') }}">Order History</a></li>
                                    <!--{!! $group = Auth::user()->group !!}-->
                                <?php
                                    if($group == "Admin")
                                        {    ?>
                                    
                                        
                                            <li><a href="{!! route('orders.index') !!}">Manage Orders</a>
                                            </li>
                                    <?php
                                        }?>
                                    
                                
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>
        
        <img src="/img/banner.png" class="img-responsive" alt="Welcome to Kenakata" width="100%"/>
        </div>
        
        <div id="main">
            <div class="flex-center position-ref full-height">
                <br/>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            @if(Session::has('message'))
                                <div class="alert alert-info">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @yield('content')
            </div>
        </div>
        
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>My Account</h4>
                        <hr/>
                        <p>My Account</p>
                        <a href="{{ route('purchasedproducts.index') }}">Order History</a>
                    </div>
                    <div class="col-md-3">
                        <h4>Customer Service</h4>
                        <hr/>
                        <a href="{!! url('/aboutus') !!}">About Us</a>
                        <a href="{!! url('/privacy-policy') !!}">Privacy Policy</a>
                        <a href="{!! url('/terms-and-conditions') !!}">Terms & Conditions</a>
                    </div>
                    <div class="col-md-3">
                        <h4>Payment Methods</h4>
                        <hr/>
                        <img src="/img/bkash.png" />
                        <img src="/img/cash.jpg" />
                    </div>
                    <div class="col-md-3">
                        <h4>Contact Us</h4>
                        <hr/>
                        <a href="https://www.facebook.com/KingSnigdho/">Join Our Facebook Page</a>
                        <a href="https://www.twitter.com/sn1gdho/">Follow on Twitter</a>
                        <a href="mailto:ssnigdho@gmail.com">Send us an Email</a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center>2016 © Kenakata Bangladesh Ltd.</center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/navbar.js"></script>
    <script src="/js/view_thumbnail.js"></script>
</body>
</html>
