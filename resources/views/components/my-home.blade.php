<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Note Xerox</title>
    <link rel="shortcut icon" href="/myassets/logonew.png">
    <link rel="stylesheet" href="/myfrontendassets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/myfrontendassets/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/myfrontendassets/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/myfrontendassets/assets/css/style.css">
</head>

<body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>
                    <a href="/" class="logo">
                        <div class="row">
                            <img src="myassets/logonew.png" alt="Molla Logo" width="36" height="36">
                            <b style="margin-left: 10px; font-size: 18px">Note Xerox</b>
                        </div>
                    </a>
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            {{-- <img src="/myassets/logonew.png" height="8" width="26"><span style="font-weight: bold; font-size:20px">Note Xerox</span> --}}
                            <li class="megamenu-container active"><a href="/" class="sf">Home</a></li>
                            <li class="megamenu-container"><a href="/product" class="sf">Products</a></li>
                            <li class="megamenu-container"><a href="/orderall" class="sf">Order</a></li>
                            <li class="megamenu-container"><a href="/service" class="sf">Service</a></li>
                            <li class="megamenu-container"><a href="/about" class="sf">About Us</a></li>
                        </ul>    
                    </nav>

                    
                </div><!-- End .header-left -->
                <div class="header-right">
                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>
                                <li><a href="tel:#"><i class="icon-phone"></i>Call: 9761800251</a></li>
                                {{-- <li><a href="wishlist.html"><i class="icon-heart-o"></i>My Wishlist <span>(3)</span></a></li> --}}
                                {{-- <li><a href="about.html">About Us</a></li> --}}
                                {{-- <li><a href="contact.html">Contact Us</a></li> --}}
                         

                                <div style="margin-left: 20px" class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            @auth
                                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                            @else
                                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </div>




                                {{-- <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li> --}}
                                {{-- <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Register</a></li> --}}
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div>
        {{-- end of header top --}}
    
      
    </header>
    <div class="page-wrapper">
       
        {{$slot}}

    
   
        <div class="container">
            <hr>
            <div class="mb-2"></div>
        </div>
    
        <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(/myfrontendassets/assets/images/backgrounds/cta/bg-6.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                            <div class="col">
                                <h3 class="cta-title text-white">Grab the Oppurtinities</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white">Note Xerox presents the Best Offers</p><!-- End .cta-desc -->
                            </div><!-- End .col -->
    
                            {{-- <div class="col-auto">
                                <a href="login.html" class="btn btn-outline-white"><span>SIGN UP</span><i class="icon-long-arrow-right"></i></a>
                            </div> --}}
    
                        </div><!-- End .row no-gutters -->
                    </div><!-- End .col-md-10 col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div>
    
        <footer class="footer footer-dark">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <div class="row">
                                    <img src="/myassets/logonew.png" width="50" height="50">
                                    <b style="margin-left: 10px; font-size: 30px">Note Xerox</b>
                                </div>
                                <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
    
                                <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
    
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->
    
                                <ul class="widget-list">
                                    <li><a href="about.html">About Molla</a></li>
                                    <li><a href="#">How to shop on Molla</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="login.html">Log in</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
    
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->
    
                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
    
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->
    
                                <ul class="widget-list">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->
    
      
        </footer><!-- End .footer -->
        <button id="scroll-top" title="Back to Top" style="color:grey"><i class="icon-arrow-up"></i></button>
    
    </div>
     <!-- Mobile Menu -->
     <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

     <div class="mobile-menu-container">
         <div class="mobile-menu-wrapper">
             <span class="mobile-menu-close"><i class="icon-close"></i></span>

             <nav class="mobile-nav">
                 <ul class="mobile-menu">
                     <li class="active"><a href="/">Home</a></li>
                     <li><a href="/product">Product</a></li>
                     <li><a href="/order">ORDER</a></li>
                     <li><a href="/service">service</a></li>
                     <li><a href="/about">About us</a></li>
                 </ul>
             </nav><!-- End .mobile-nav -->
 
             <div class="social-icons">
                 <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                 <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                 <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                 <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
             </div><!-- End .social-icons -->
         </div><!-- End .mobile-menu-wrapper -->
     </div><!-- End .mobile-menu-container -->



    <!--  JS Files -->
    <script src="/myfrontendassets/assets/js/jquery.min.js"></script>
    <script src="/myfrontendassets/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/myfrontendassets/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="/myfrontendassets/assets/js/jquery.waypoints.min.js"></script>
    <script src="/myfrontendassets/assets/js/superfish.min.js"></script>
    <script src="/myfrontendassets/assets/js/owl.carousel.min.js"></script>
    {{-- popup ko lai matra yo asset load gareko ho... --}}
    {{-- <script src="/myfrontendassets/assets/js/jquery.magnific-popup.min.js"></script> --}}
    <script src="/myfrontendassets/assets/js/main.js"></script>
</body>
</html>






