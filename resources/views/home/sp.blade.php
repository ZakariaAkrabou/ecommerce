
<section class="shop spad">
        <div class="container">
            <div class="row">
            
            <div class="col-lg-3 col-md-3">
               
                   
                   
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Category Lists</h4>
                            </div>
                            <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                               
                                <div class="card">

                                       
                                    
                                    <div id="collapseOne" class="custom-control custom-checkbox" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @foreach($categories as $category)

                                          <ul>
                                            <li><input type="checkbox" name="category" value="{{ $category->category_name }}"
                                                @if(in_array($category->id, explode(',', request()->input('filter.category'))))
                                                    checked
                                                @endif><b>  {{ $category->category_name }}</b></input></li>
                                          </ul>
                                                
                                                
                                                        
                                              
                                          
                                            @endforeach
                                                    <div  class="d-flex justify-content-end">
                                                        <button class="btn btn-danger"  id="filter">Filter</button>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                                
                                  
                                </div>
                            </div>
                        </div>
                       
                        
                       
                    </div>
                
                </div>
                <div class="col-lg-9 col-md-9">
                       
                    <div class="row">
                        
                    @foreach($prod as $prods)
                        <div class="col-lg-4 col-md-6">
                            
                            <div class="product__item">
                            
                                <div class="product__item__pic set-bg" data-setbg="/product/{{$prods->image}}">
                                    <ul class="product__hover">
                                        <li><a href="/product/{{$prods->image}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="{{ url('product_detail',$prods->id)}}"><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="{{ url('product_detail',$prods->id)}}" value="{{$prods->id}}">{{ $prods->title }}</a></h6>
        
                                    @if($prods->discount_price!=null)
                                    <div class="product__price" style="color:green; ">{{ $prods->price }} DH</div>
                                    <div class="product__price" style="color:red; text-decoration: line-through;" >{{ $prods->discount_price }}%</div>
                                    @else
                                    <div class="product__price" style="color:green; ">{{ $prods->price }} DH</div>
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
        <!-- <script>
jQuery(document).ready(function ($) {
    $('select[name=category]').on('change', function () {
        var selected = $(this).find(":selected").attr('value');
        $.ajax({
                    url: base_url + '/category/'+selected+'/products/',
                    type: 'GET',
                    dataType: 'json',

            }).done(function (data) {

                var select = $('select[name=product]');
                select.empty();
                select.append('<option value="0" >Please Select Product</option>');
                $.each(data,function(key, value) {
                    select.append('<option value=' + key.id + '>' + value.name + '</option>');
                });
                console.log("success");
        })
    });
});
</script> -->

<!-- <script>

    $('#sort_by').on('change',function() {

        let sort_by = $('#sort_by').val();

        alert(sort_by);
    });


</script> -->
</section>

