<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atdev Ecommerce </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   @include('home.header')
    <!-- Header Section End -->

    <!-- Categories Section Begin -->
 
<!-- Categories Section End -->
     
<!-- Product Section Begin -->
    
<!-- Product Section End -->
<section class="shop spad">
        <div class="container">
            <div class="row">
            
            <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    @foreach($category as $categorys)
                                    <div class="card">
                                        
                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="{{ url('view_category/'.$categorys->category) }}">{{ $categorys->category_name }}</a></li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                       
                        
                       
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                       
                    <div class="row">
                        
                    @foreach($product as $products)
                        <div class="col-lg-4 col-md-6">
                            
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
                                    @if($products->discount_price!=null)
                                    <div class="product__price" style="color:green; ">{{ $products->price }} DH</div>
                                    <div class="product__price" style="color:red; text-decoration: line-through;" >{{ $products->discount_price }}%</div>
                                    @else
                                    <div class="product__price" style="color:green; ">{{ $products->price }} DH</div>
                                     @endif
                                </div>
                              
                            </div>
                           
                        </div>
                    @endforeach  
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
               
            </div>

        </div>
</section>
<!-- Banner Section Begin -->

<!-- Banner Section End -->

<!-- Trend Section Begin -->

<!-- Trend Section End -->

<!-- Discount Section Begin -->

<!-- Discount Section End -->

<!-- Services Section Begin -->

<!-- Services Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ zakaria.akr</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ zakaria.akr</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ zakaria.akr</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ zakaria.akr</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ zakaria.akr</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ zakaria.akr</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->

<!-- Footer Section Begin -->
@include('home.footer')
<!-- Footer Section End -->

<!-- Search Begin -->
@include('home.search')
<!-- Search End -->

<!-- Js Plugins -->
<script src="home/js/jquery-3.3.1.min.js"></script>
<script src="home/js/bootstrap.min.js"></script>
<script src="home/js/jquery.magnific-popup.min.js"></script>
<script src="home/js/jquery-ui.min.js"></script>
<script src="home/js/mixitup.min.js"></script>
<script src="home/js/jquery.countdown.min.js"></script>
<script src="home/js/jquery.slicknav.js"></script>
<script src="home/js/owl.carousel.min.js"></script>
<script src="home/js/jquery.nicescroll.min.js"></script>
<script src="home/js/main.js"></script>
</body>

</html>