@include('sweetalert::alert')
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                   
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                           
                                <?php $totalprice=0; ?>
                                @foreach($cart as $cart)
                                <tr>
                                    <td class="cart__product__item">
                                        <img src="/product/{{$cart->image}}" alt="" width="200">
                                        <div class="cart__product__item__title">
                                            <h6>{{ $cart->product_title }}</h6>
                                           
                                        </div>
                                    </td>
                                    <td class="cart__price">${{ $cart->price }}</td>
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="{{ $cart->quantity }}">
                                        </div>
                                    </td>
                                    <?php $totalprice= $totalprice + $cart->price * $cart->quantity;?>
                                    <td class="cart__close"><a href="{{url('remove_cart',$cart->id) }}" onclick="confirmation(event)"><span class="icon_close"></a></span></td>
                                </tr>
                                   
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="{{'/'}}" class="btn btn-danger">Continue Shopping</a>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6">
                   
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                       
                        <h6>Cart total</h6>
                      

                            
                      
                        <ul>
                            <li>Total <span>{{ $totalprice }}$</span></li>
                        </ul>

                       

                        
                            <div  class="d-flex justify-content-center ">
                                
                        <a href="{{ url ('cash_order') }}" class="btn btn-danger btn-lg btn-block"><i class="fa fa-money"></i> Cash On Delivery</a>
                                   
                            </div>
                                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to cancel this product",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>
    <!-- Shop Cart Section End -->
