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
                <h1 class="text-size" style="text-align: center;">Edit Category</h1>

                <form action="{{ route('update_category',$editcat->id) }}" method="POST" enctype="multipart/form-data">

                  @csrf
                  @method('PUT')

                  <div class="form-group">
                          <label for="">Category Name : </label>
                          <input type="text" placeholder="Categoty Name" value="{{$editcat->category_name}}" name="category_name" size="50" class="form-control" style="color:black;"required>
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