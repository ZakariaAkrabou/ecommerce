<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('layouts.admin.style')

    <style type="text/css">

    .center{

        text-align: center;
        padding-top:40px;
    }
    .font{
            font-size:40px;
            padding-bottom: 40px;
    }
    .ctg{
        color:black;
    }
    .table{

      margin:auto;
      width:100%;
      text-align:center;
      border: 1px solid white;
      margin-top:30px;
      color:white;
    }
    .thead{
     
      color:black;
      font-size: 15px;
      font-style: bold;
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
        <div class="main-panel">
          <div class="content-wrapper">

          @if (session()->has('message'))

          
          <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" area-hidden="true"></button>
            {{ session()->get('message') }}
          </div>
          @endif
            <div class="center">
                <h2 class="font">Add Category</h2>

                <form action="{{url('/add_category')}}" method="POST">

                @csrf
                    <input type="text" name="category" placeholder="Add Category" class="ctg" required>
                    
                    <input type="submit" class="btn btn-danger btn-lg" name="submit" value="Add Category">
                </form>
            </div>
            <table class="table ">
            <thead class="thead-dark">
            <tr>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
            </thead>
            @foreach($data as $data)
            <tr>
            <td>{{$data->category_name}}</td>

              

              <td>
                <a href="{{route('edit_category',$data->id)}}" class="btn btn-success"><i class='bx bx-edit'></i></a>
                <a onclick= "return confirm('Are You Sure Want Delete this')" href="{{url('delete_category',$data->id)}}" class="btn btn-danger"><i class='bx bx-trash'></i></a>
              </td>
              
            </tr>
            @endforeach



            </table>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('layouts.admin.js')
  </body>
</html>