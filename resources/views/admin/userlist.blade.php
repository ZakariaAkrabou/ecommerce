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

          <h2 class="txthead">All Users</h2>


          <table class="table">
          @php $users = DB::table('users')->get(); @endphp
          <thead class="thead-dark">
        
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Last Connection</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($user as $users)
    <tr>
      
      <td scope="col">{{$users->name}}</td>
      <td scope="col">{{$users->email}}</td>
      <td scope="col">{{$users->phone}}</td>
      <td scope="col">{{$users->address}}</td>
      <td scope="col">
      @if(Cache::has('user-is-online-' . $users->id))
                                                <span class="text-success">Online</span>
                                            @else
                                                <span class="text-secondary">Offline</span>
                                            @endif
      </td>
      <td>{{ \Carbon\Carbon::parse($users->status)->diffForHumans() }}</td>
      <td scope="col">
      <a onclick= "return confirm('Are You Sure Want Delete this')"  href="" class="btn btn-danger"><i class='bx bx-trash'></i></a>
      
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