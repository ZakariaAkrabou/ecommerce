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
            
          <h2 class="txthead">All Products</h2>


          <table class="table">
          <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th> 
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($product as $product)
      <td scope="col">{{$loop->index+1}}</td>
      <td scope="col">{{$product->title}}</td>
      <td scope="col">{{$product->description}}</td>
      <td scope="col">{{$product->quantity}}</td>
      <td scope="col">{{$product->category}}</td>
      <td scope="col">{{$product->price}}</td>
      <td scope="col">{{$product->discount_price}}</td> 
      <td scope="col"> <img class="sizeimg" src="/product/{{$product->image}}"></td>
      <td scope="col">
      <a onclick= "return confirm('Are You Sure Want Delete this')"  href="{{url('delete_product',$product->id)}}" class="btn btn-danger"><i class='bx bx-trash'></i></a>
      <a href="{{url('update_product',$product->id)}}" class="btn btn-success"><i class='bx bx-edit'></i></a>
      </td>
    </tr>
        @endforeach
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