<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('layouts.admin.style')


    <style type="text/css">

        .table{
            
            margin:auto;
            width:50%;
            border: 1px solid #fff;
            text-align:center;
            margin-top:40px;
            color:white;
        }
        .txthead{
             text-align:center;
             font-size:40px;
             padding-top:20px;
        }

        .sizeimg{
            width:150px;
            height:150px;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.admin.side')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <form action="{{ url('search') }}" method="get">
              @csrf
              <div class="d-flex justify-content-center">
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="search for order" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type ="submit" class="btn btn-sm btn-primary" type="button" value="Search">
              </div>
            </div>
              </div>
        </form>
          <h2 class="txthead">All Orders</h2>


          <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
     
      <th scope="col">Product title</th>
      <th scope="col">Price</th> 
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Delivery Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @forelse ($order as $orders)
    <tr>
      
   
      
      <td scope="col">{{$orders->name}}</td>
      <td scope="col">{{$orders->address}}</td>
      <td scope="col">{{$orders->phone}}</td>
      <td scope="col">{{$orders->product_title}}</td>
      <td scope="col">{{$orders->price}}</td>
      <td scope="col">{{$orders->quantity}}</td>
      <td scope="col"><img class="sizeimg" src="/product/{{$orders->image}}"></td>
      <td scope="col">{{$orders->payment_status}}</td>
      <td scope="col"><label >{{$orders->delivery_status}}</label></td> 
      <td scope="col"> 
        
      @if($orders->delivery_status == 'processing')
      <a href="{{url('delivred',$orders->id)}}" class="btn btn-success">Delivred</a>
        
      @else

            <p style="color: green;">Deliverd</p>

      @endif
    
      

    @empty

       <tr colspan="20" style="text-align:center;">
          <td>No Data Found</td>
       </tr>
    @endforelse

  </tbody>
</table>








          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('layouts.admin.js')
  </body>
</html>