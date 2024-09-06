<style type="text/css">

    .discount__price{
        text-decoration: line-through;
    }
</style>

<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>New product</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".women">Women’s</li>
                    <li data-filter=".men">Men’s</li>
                    <li data-filter=".kid">Kid’s</li>
                    
                </ul>
            </div>
            
        </div>
        <div class="row property__gallery">
            @foreach($product as $products)
           
            <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="/product/{{$products->image}}">
                        <ul class="product__hover">
                            <li><a href="/product/{{$products->image}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                    
                            <li><a href="{{ url('product_detail',$products->id)}}"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">{{ $products->title }}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price"  style="color:green;">{{ $products->price }}DH</div>
                        @if($products->discount_price!=null)
                        
                        <div class="discount__price" style="color:red;">{{ $products->discount_price }}%</div>
                       
                        @endif

                        
                       
                    </div>
                </div>
            </div>
            
           @endforeach
           
        </div>
    </div>
</section>