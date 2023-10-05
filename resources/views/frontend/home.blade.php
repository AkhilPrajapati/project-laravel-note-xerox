<x-my-home>



   





    
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
               
            </div>
        </div>
    </div>
   

    <main class="main">
        <div class="intro-section bg-lighter pt-5 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                            <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "responsive": {
                                        "768": {
                                            "nav": true
                                        }
                                    }
                                }'>
                                
                                
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="/myfrontendassets/assets/images/slider/slide-1-480w.jpg">
                                            <img src="/myassets/image6.jpg">
                                        </picture>
                                    </figure>
                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">Written Note</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">The Note Services</h1>
                                        <a href="#" class="btn btn-outline-white">
                                            <span>EXPLORE</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="/myfrontendassets/assets/images/slider/slide-1-480w.jpg">
                                            <img src="/myassets/image8.png">
                                        </picture>
                                    </figure>
                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">Documentation</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">Hard Book Bindings</h1>
                                        <a href="#" class="btn btn-outline-white">
                                            <span>EXPLORE</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="/myfrontendassets/assets/images/slider/slide-1-480w.jpg">
                                            <img src="/myassets/image5.png">
                                        </picture>
                                    </figure>
                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">Written Note</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">Handwritten Notes</h1><!-- End .intro-title -->
                                        {{-- Your all ideas are in handwritten form --}}
                                        <a href="#" class="btn btn-outline-white">
                                            <span>EXPLORE</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="intro-banners">
                            <div class="row row-sm">
                                <div class="col-md-6 col-lg-12">
                                    <div class="banner banner-display mb-0">
                                        <img src="/myassets/image4.jpg" alt="Banner">
                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-darkwhite">Written Notes</h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white">Services in Offer</h3><!-- End .banner-title -->
                                            <a href="/orderall" class="btn btn-outline-white banner-link">Place Order<i class="icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6 col-lg-12"  style="margin-top: 2px">
                                    <div class="banner banner-display mb-0">
                                        <img src="/myassets/image8crop.png" alt="Banner">
                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-darkwhite">Written Notes</h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white">Regular Services</h3><!-- End .banner-title -->
                                            <a href="/orderall" class="btn btn-outline-white banner-link">Place Order<i class="icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .row row-sm -->
                        </div><!-- End .intro-banners -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
                <div class="mb-6"></div><!-- End .mb-6 -->
            </div><!-- End .container -->
        </div><!-- End .bg-lighter -->

        <div class="mb-6"></div><!-- End .mb-6 -->

        <div class="mb-5"></div>

        {{-- NEW --}}
        <div class="container">
            <div class="heading heading-center mb-6">
                <h2 class="title">Available Services</h2><!-- End .title -->

                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab" aria-controls="top-fur-tab" aria-selected="false">HIGHLGHTED</a>
                    </li>

                </ul>
            </div><!-- End .heading -->

            <div class="tab-content">
                <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            @foreach($product as $product)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">{{$product->tag}}</span>
                                        <img src="{{$product->image}}" alt="Product image" class="product-image">
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><b>{{$product->name}}</b></h3><!-- End .product-title -->
                                        <div class="product-price">Rs. {{$product->price}}</div>
                                        <div class="product-action"><a href="/order/create/{{$product->id}}" class="btn-product btn-cart"><span>Order Now</span></a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div><!-- .End .tab-pane -->

                <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            
                            @foreach($product2 as $product2)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-11 mt-v3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">{{$product2->tag}}</span>
                                            <img src="{{$product2->image}}" alt="Product image" class="product-image">
                                    </figure>
                                    <div class="product-body">
                                        <h3 class="product-title"><b>{{$product2->name}}</b></h3><!-- End .product-title -->
                                        <div class="product-price">Rs. {{$product2->price}}</div>
                                        <div class="product-action"><a href="#" class="btn-product btn-cart"><span>Order Now</span></a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div><!-- .End .tab-pane -->
              
            </div><!-- End .tab-content -->
            <div class="more-container text-center">
                <a href="/product" class="btn btn-outline-darker btn-more"><span>Load all Items</span><i class="icon-long-arrow-down"></i></a>
            </div><!-- End .more-container -->
        </div>


    </main>


</x-my-home>