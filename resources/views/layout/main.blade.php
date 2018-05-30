<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','OnlineMitumba')
        </title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/foundation.css') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}"/>
        


    </head>
    <body>
        <!-- nav -->
            <div class="top-bar">
            <nav class="navbar navbar-custom " id="nav-main">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            Menu <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <a href="{{ Route('front')}}" class="navbar-brand"><i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>OnlineMitumba Clothes </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="{{ Route('front')}}">HOME</a></li>
                            <li><a href="#about">ABOUT US</a></li>
                            <li><a href="{{ Route('clothes')}}">CLOTHES</a></li>
                            <li><a href="#contact">CONTACT</a></li>
                            <li> <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            CART
                            <span class="alert badge">
                                {{ Cart::count() }}
                            </span>
                        </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    <!--end nav  -->
        
        
        
        @yield('content')


<!-- footer start -->
        <!-- ================ -->
        <div id="contact">
        <footer id="footer">

            <!-- .footer start -->
            <!-- ================ -->
            <div class="footer ">

                <div class="container">
                    <h1 class="title text-center" id="contact"><span><strong>Hello there...</strong></span></h1>
                    <div class="space"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-content">
                                <p class="large">We are here to make your life easier, and we would love to hear your feedback. For any enquries, feel free to contact us via the contacts below, or fill up the form alongside</p>
                    <h4 class="title text-left" id="contact"><span>Help us serve you better</span></h1>
                                <ul class="list-icons">
                                    <li><i class="fa fa-map-marker pr-10"></i> Online Mitumba,
                                    Nakuru.</li>
                                    <li><i class="fa fa-phone pr-10"></i>P.O Box 12516 – 20100 GPO, Nakuru
                                    </li>

                                    <li><i class="fa fa-phone pr-10"></i> +254 724 435 035</li>
                                    <li><i class="fa fa-envelope-o pr-10"></i> onlinemitumba@gmail.com</li>
                                </ul>
                                <ul class="social-links">
                                    <li class="facebook"><i class="fa fa-facebook"></i></li>
                                    <li class="twitter"><i class="fa fa-twitter"></i></li>
                                    <li class="googleplus"><i class="fa fa-google-plus"></i></li>
                                    <li class="skype"><i class="fa fa-skype"></i></li>
                                    <li class="linkedin"><i class="fa fa-linkedin"></i></li>
                                    <li class="youtube"><i class="fa fa-youtube"></i></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-content">
                                <form role="form" id="footer-form">
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="name2">Name</label>
                                        <input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="email2">Email address</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="message2">Message</label>
                                        <textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                    <input type="submit" value="Send" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .footer end -->

            <!-- .subfooter start -->
            <!-- ================ -->
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center" style="color: black;" >Copyright © 2018 Online Mitumba</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .subfooter end -->

        </footer>
    </div>
        <!-- footer end -->

    <script src="{{ asset('dist/js/vendor/jquery.js')}}"></script>
   <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
    Stripe.setPublishableKey('pk_test_69nXaxRgJektpf0hb4cl2v2Y');
    </script>
    <script src="{{ asset('dist/js/app.js')}}"></script>
    </body>
</html>
