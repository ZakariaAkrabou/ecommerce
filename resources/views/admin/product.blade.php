<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('layouts.admin.style')
   
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
          <div class="card">
                  <div class="card-body">
                <h1 class="text-size" style="text-align: center;">Add Product</h1>

                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                <div class="form-group">
                            <label for="">Product Name : </label>
                            <input type="text" name="p_name" placeholder="Product Name" size="50" class="form-control" style="color:black;"required>
                 </div>
                 <div class="form-group">
                            <label for="">Product description : </label>
                            <input type="text" name="desc" placeholder="description" size="50" class="form-control" style="color:black;" required>
                 </div>
                 <div class="form-group">
                            <label for="">Product price : </label>
                            <input type="text" name="p_price" placeholder="Price" size="50" class="form-control" style="color:black;" required>
                 </div>
                 <div class="form-group">
                            <label for="">Product Category : </label>
                            <select name="ctg" class="form-control" style="color:white;" required>
                                <option value="" selected="" >Add Category here</option>
                                @foreach($category as $category)
                                <option value="{{$category->category_name }}">{{$category->category_name }}</option>
                                @endforeach
                            </select>
                 </div>
                 <div class="form-group">
                            <label for="">Product Image : </label>
                            <input type="file" name="image" placeholder="Product Name" size="50" class="form-control"  required >
                            
                 </div>
                 <div class="form-group">
                            <label for="">Product Quantite : </label>
                            <input type="number" name="qte" placeholder="Quantity" size="50" class="form-control" style="color:black;" required>
                 </div>
                 <div class="form-group">
                            <label for="">Discount price : </label>
                            <input type="text" name="discount" placeholder="discount" size="50" class="form-control" style="color:black;" >
                 </div>
                 
                 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                 </div>
                 </form>
            </div>


          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('layouts.admin.js')
  </body>
</html>