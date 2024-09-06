<section class="product-details spad">
        <div class="container">
       
            <div class="row">
               
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="/product/{{$product->image}}" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>{{ $product->title }}</h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <div class="product__details__price">Dh {{ $product->price }}<span> Dh {{ $product->discount_price }}</span></div>
                        <div class="product__details__button">
                        <form action="{{url('add_cart',$product->id)}}" method="post">
                                @csrf
                            <div class="quantity" >
                                <span>Quantity:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1" name="stock">
                                </div>
                            </div>
                            
                               
                            <input class="cart-btn" type="submit" value="Add To Cart">
                                
                            </form>
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Quantity:</span>
                                    <div class="stock__checkbox">
                                        <label for="stockin">
                                            {{ $product->quantity }}
                                        </label>
                                    </div>
                                </li>
                                
                               
                                <li>
                                    <span>Delivery:</span>
                                    <p>Free shipping</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Description</h6>
                                <p>{{$product->description}}</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
            </div>
        
            
        </div>
    </section>