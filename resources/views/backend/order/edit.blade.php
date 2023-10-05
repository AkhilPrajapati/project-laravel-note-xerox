<x-my-admin>
  
    
        <div class="container">
            <form action="/admin/order/{{$data->id}}" method="post">
                @csrf

                <h4>Confirm Change</h4>

                {{-- <select name="" id="" class="btn btn-secondary dropdown-toggle">
                    <option value="volvo" class="btn btn-primary">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                  </select> --}}


                {{-- <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                      Default dropdown
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                   --}}



                <label for="status"><h6>Click to Change Status<span class="text-danger"> *</span></h6></label><br>
          
                <button type="submit" class="btn btn-primary my-2">Change</button><br><br>
            </form>
        </div>
   

</x-my-admin>