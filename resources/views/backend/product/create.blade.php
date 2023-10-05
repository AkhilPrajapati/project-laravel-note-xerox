<x-my-admin>
   
        <div class="container">
            <h1 style="font-style: normal">Product Entry Form</h1>
            <div class="row">
                <form action="/admin/product" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <div class="bfg">
                                <label for="name">Product Name<span class="text-danger"> *</span></label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                        </div><br>
                        <div class="col-md-6 my-2">
                            <div class="bfg">
                                <label for="price">Price<span class="text-danger"> *</span></label>
                                <input type="text" id="price" name="price" class="form-control" required>
                            </div>
                        </div><br>
                        <div class="col-md-6 my-2">
                            <div class="bfg">
                                <label for="file">Image<span class="text-danger"> *</span></label>
                                <input type="file" id="file" name="file" class="form-control" required>                            
                            </div>
                        </div><br>
                        
                        {{-- <div class="col-md-6 my-2">
                            <div class="bfg">
                                <label for="tag">Choose Tag:<span style="color:grey">(if any)</span></label>
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    Mention Not
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                </ul>
                            </div>
                        </div><br> --}}

                        <div class="col-md-6 my-2">
                            <div class="bfg">
                                <label for="tag">Choose Tag: </label>
                                <select name="tag" id="tag">
                                  <option value="">null</option>
                                  <option value="new">new</option>
                                  <option value="20%">20%</option>
                                  <option value="40%">40%</option>
                                </select>
                            </div>
                        </div><br>
                    </div>
                    
                    <div class="com-md-12">
                        <button type="submit" class="btn btn-primary my-2">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
  
</x-my-admin>
