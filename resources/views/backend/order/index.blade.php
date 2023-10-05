<x-my-admin>
    <section class="section">
      
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3>List of Orders</h3>
      
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
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Day</th>
                    <th>Location</th>
                    <th>File</th>
                    <th>More Action</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->product->name}}</td>
                    <td>{{$data->customer}}</td>
                    <td>{{$data->contact}}</td>
                    <td>
                        @if ($data->status == "Delivered")
                        <img height="24" width="24" src="/myassets/tick.png" style="margin-left: 8px">
                        @else 
                        {{$data->status}}
                        @endif
                    </td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->day}}</td>
                    <td><a href="https://maps.google.com/?q={{$data->location}}">View</a></td>
                    {{-- <td>{{$data->location}}</td> --}}
                    <td>
                      <a href={{'/admin/order/download/'.$data['id']}}>Load</a>
                    </td>
                    <td>
                        <a href={{'/admin/order/edit/'.$data['id']}} class="btn btn-warning btn-sm">Check</a>
                        <a href={{'/admin/order/delete/'.$data['id']}} class="btn btn-danger btn-sm" onclick= "alert('Please confirm to delete !!!')">Drop</a>
                    </td>
                </tr>
                @endforeach
            </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </section>  
  </div>
  
  </x-my-admin>
  







   