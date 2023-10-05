<x-my-admin>
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3>List of Products</h3>
            {{-- <a href="/admin/product/create" class="btn btn-secondary" style="margin-left: 20px">Add Product</a> --}}
            <a href="/admin/product/create" class="btn btn-primary" aria-setsize="20" style="margin-left: 20px">Add Product</a>                        

            <div class="card-header-form" style="margin-right: 6%">
              <form>
                <div class="input-group">
                 
                  {{-- <a href="/product/create" class="btn btn-primary" aria-setsize="20" style="margin-left: 20px">add product</a>                         --}}
                </div>
              </form>
            </div>
          </div>

          <div class="card-body p-0">
            {{-- <a href="/product/create" class="btn btn-primary" aria-setsize="20" style="margin-left: 20px">add product</a>                         --}}

            <div class="table-responsive">
            {{-- <a href="#" class="btn btn-secondary">Add New</a> --}}

              <table class="table" border="0" style="background-color: ghostwhite">               
                  <tr>
                      <th>#SN</th>
                      <th>Title</th>
                      <th>Price</th>
                      <th>Tag</th>
                      <th>Entry Date</th>
                      <th>Image</th>
                      <th>More Actions</th>
                  </tr>
                  @foreach($product as $item)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->price}}</td>
                      <td>{{$item->tag}}</td>
                      <td>{{$item->date}}</td>
                      <td>
                        <img height="40" width="60" src="/{{$item->image}}" alt="">
                      </td>
                      <td>
                          <a href={{'/admin/product/edit/'.$item['id']}} class="btn btn-primary">edit</a>
                          <a href={{'/admin/product/delete/'.$item['id']}} class="btn btn-danger" onclick= "alert('Please confirm to delete !!!')">drop</a>
                      </td>
                      
                  </tr>
                  @endforeach
              
              
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-12 col-xl-6">
        <!-- Support tickets -->
        <div class="card">
          <div class="card-header">
            <h4>Support Ticket</h4>
            <form class="card-header-form">
              <input type="text" name="search" class="form-control" placeholder="Search">
            </form>
          </div>
          <div class="card-body">
            <div class="support-ticket media pb-1 mb-3">
              <img src="/mybackendassets/assets/img/users/user-1.png" class="user-img mr-2" alt="">
              <div class="media-body ml-3">
                <div class="badge badge-pill badge-success mb-1 float-right">Feature</div>
                <span class="font-weight-bold">#89754</span>
                <a href="javascript:void(0)">Please add advance table</a>
                <p class="my-1">Hi, can you please add new table for advan...</p>
                <small class="text-muted">Created by <span class="font-weight-bold font-13">John
                    Deo</span>
                  &nbsp;&nbsp; - 1 day ago</small>
              </div>
            </div>
            <div class="support-ticket media pb-1 mb-3">
              <img src="/mybackendassets/assets/img/users/user-2.png" class="user-img mr-2" alt="">
              <div class="media-body ml-3">
                <div class="badge badge-pill badge-warning mb-1 float-right">Bug</div>
                <span class="font-weight-bold">#57854</span>
                <a href="javascript:void(0)">Select item not working</a>
                <p class="my-1">please check select item in advance form not work...</p>
                <small class="text-muted">Created by <span class="font-weight-bold font-13">Sarah
                    Smith</span>
                  &nbsp;&nbsp; - 2 day ago</small>
              </div>
            </div>
            <div class="support-ticket media pb-1 mb-3">
              <img src="/mybackendassets/assets/img/users/user-3.png" class="user-img mr-2" alt="">
              <div class="media-body ml-3">
                <div class="badge badge-pill badge-primary mb-1 float-right">Query</div>
                <span class="font-weight-bold">#85784</span>
                <a href="javascript:void(0)">Are you provide template in Angular?</a>
                <p class="my-1">can you provide template in latest angular 8.</p>
                <small class="text-muted">Created by <span class="font-weight-bold font-13">Ashton Cox</span>
                  &nbsp;&nbsp; -2 day ago</small>
              </div>
            </div>
            <div class="support-ticket media pb-1 mb-3">
              <img src="/mybackendassets/assets/img/users/user-6.png" class="user-img mr-2" alt="">
              <div class="media-body ml-3">
                <div class="badge badge-pill badge-info mb-1 float-right">Enhancement</div>
                <span class="font-weight-bold">#25874</span>
                <a href="javascript:void(0)">About template page load speed</a>
                <p class="my-1">Hi, John, can you work on increase page speed of template...</p>
                <small class="text-muted">Created by <span class="font-weight-bold font-13">Hasan
                    Basri</span>
                  &nbsp;&nbsp; -3 day ago</small>
              </div>
            </div>
          </div>
          <a href="javascript:void(0)" class="card-footer card-link text-center small ">View
            All</a>
        </div>
        <!-- Support tickets -->
      </div>
      <div class="col-md-6 col-lg-12 col-xl-6">
        <div class="card">
          <div class="card-header">
            <h4>Projects Payments</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Client Name</th>
                    <th>Date</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>John Doe </td>
                    <td>11-08-2018</td>
                    <td>NEFT</td>
                    <td>$258</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Cara Stevens
                    </td>
                    <td>15-07-2018</td>
                    <td>PayPal</td>
                    <td>$125</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>
                      Airi Satou
                    </td>
                    <td>25-08-2018</td>
                    <td>RTGS</td>
                    <td>$287</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>
                      Angelica Ramos
                    </td>
                    <td>01-05-2018</td>
                    <td>CASH</td>
                    <td>$170</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>
                      Ashton Cox
                    </td>
                    <td>18-04-2018</td>
                    <td>NEFT</td>
                    <td>$970</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>
                      John Deo
                    </td>
                    <td>22-11-2018</td>
                    <td>PayPal</td>
                    <td>$854</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>
                      Hasan Basri
                    </td>
                    <td>07-09-2018</td>
                    <td>Cash</td>
                    <td>$128</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
</div>





















</x-my-admin>
