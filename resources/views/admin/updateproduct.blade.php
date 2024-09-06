<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
    @include('layouts.admin.style')
    <style type="text/css">


        .add-center{
            text-align: center;
        }

        .text-size{

            font-size:40px;
            padding-bottom: 40px;
        }

        label{
            display: inline-block;
            width: 200px;
        }

        .design{

            padding-bottom:15px;
        }
        .textcolor{

            color:black;
        }
        .design input ,select{

            width:500px;
        }
        .btn{
            display: inline-block;
            justify-content: center;
            text-align: center;
            width: 120px;
            border-radius:8%;
            background-color: yellow;
            color:black;
        }

        .btn:hover{

            background-color:aqua;
            color:black;
            transition:0.4s 
        }
        .center{
            width: 200px;
            height: 100px;
            display: block;
            margin: auto;
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
            <div class="add-center">
                <h1 class="text-size">Edit Product</h1>

                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" layouts.>

                    @csrf

                <div class="design">
                            <label for="">Product Name : </label>
                            <input type="text" name="p_name" placeholder="Product Name" value="{{$product->title}}" size="50" class="textcolor"required>
                 </div>
                 <div class="design">
                            <label for="">Product description : </label>
                            <input type="text" name="desc" placeholder="description" size="50" value="{{$product->description}}" class="textcolor"required>
                 </div>
                 <div class="design">
                            <label for="">Product price : </label>
                            <input type="text" name="p_price" placeholder="Price" size="50" value="{{$product->price}}"class="textcolor"required>
                 </div>
                 <div class="design">
                            <label for="">Product Category : </label>
                            <select name="ctg" class="textcolor"  required>
                            <option value="{{$product->category}}">{{$product->category}}</option>
                            @foreach($category as $category)
                                <option value="{{$category->category_name }}">{{$category->category_name }}</option>
                                @endforeach
                            </select>
                 </div>
                 <div class="design">
                            <label for=""> current Product Image  </label>
                            <img  class="center" src="/product/{{$product->image}}">
                 </div>
                 <div class="design">
                            <label for="">Product Image : </label>
                            <input type="file" name="image" placeholder="Product Name" size="50" class="textcolor" style="color: #fff">
                 </div>
                 <div class="design">
                            <label for="">Product Quantite : </label>
                            <input type="number" name="qte" placeholder="Quantity" value="{{$product->quantity}}" size="50" class="textcolor"required>
                 </div>
                 <div class="design">
                            <label for="">Discount price : </label>
                            <input type="text" name="discount" placeholder="discount" value="{{$product->discount_price}}" size="50" class="textcolor">
                 </div>
                 <div class="btn">
         
                            <input type="submit" value="Update Product">
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