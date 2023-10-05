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
                    <div style="margin-left: 30%">
                        <form action="/order" method="post" enctype="multipart/form-data">
                            @csrf
                            <h4>Confirm Order for <b>"{{$product_name}}-{{$product_id}}"</b></h4>
                            
                            <label for="name"><span style="font-size: 16px">Please Provide Name</span><span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" required>

                            <label for="contact"><span style="font-size: 16px">Please Provide Contact</span><span class="text-danger"> *</span></label>
                            <input type="tel" id="contact" name="contact" class="form-control" minlength="10" maxlength="10" required>
                            
                            <input type="hidden" id="product" name="product_id" class="form-control" value="{{$product_id}}" required>
                            
                            <label for="file"><span style="font-size: 16px">Choose File (in pdf only)</span><span class="text-danger"> *</span></label>
                            <input type="file" id="file" name="file" class="form-control" required>                            

                            <button type="submit" class="btn btn-sm my-2" style="background-color: pink">Confirm Order</button><br><br>

                        </form>
                    </div>
                </div><!-- End .row -->
                <div class="mb-6"></div><!-- End .mb-6 -->
            </div><!-- End .container -->
        </div><!-- End .bg-lighter -->
        <div class="mb-6"></div><!-- End .mb-6 -->
        <div class="mb-5"></div>
    </main>
</x-my-home>










































