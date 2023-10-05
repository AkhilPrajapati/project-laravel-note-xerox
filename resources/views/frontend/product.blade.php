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
        <div class="mb-6"></div>
        <div class="container">
            <div class="heading heading-center mb-6">
                <h2 class="title">All Available Products</h2><!-- End .title -->
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                    </li>
                </ul>
            </div>
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
                </div>
            </div>
        </div>
    </main>
</x-my-home>