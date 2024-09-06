<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function index()
    {
        
        return view('home.user');
    }

    public function Allprod(){

        $product = Product::paginate(4);
        return view('home.user',compact('product'));
    }
    public function redirect(){

        $userrole=Auth::user()->role;

        if($userrole=='1'){

            
            $totalproduct=Product::all()->count();
            $totalorder = Order::all()->count();
            $totaluser = User::all()->count();
            

            
            
            
            $order = Order::all();

            $totalrevenue=0;

            foreach($order as $order){

                $totalrevenue = $totalrevenue + $order->price;
            }

            $totaldelivery = Order::where('delivery_status' ,'=', 'Delivred')->get()->count();

          

            $orderprocessing = Order::where('delivery_status' ,'=', 'processing')->get()->count();

            return view('admin.home', compact('totalproduct','totalorder','totaluser','totalrevenue','totaldelivery','orderprocessing'));
        }
        else{
            $product = Product::paginate(4);
            return view('home.user',compact('product'));
        }
     }

     public function product_detail($id){

        $product=Product::find($id);
        
        return view('home.product_detail',compact('product'));
     }


     public function add_cart(Request $request ,$id){





       if(Auth::id()){



                $user=Auth::user();

                $userid=$user->id; 

                $product=Product::find($id);

                $product_id_exist=Cart::where('product_id','=',$id)->where('user_id','=',$userid)->get('id')->first();

                if($product_id_exist){

                    $cart=Cart::find($product_id_exist)->first();

                    $quantity=$cart->quantity;
                    $cart->$quantity=$quantity + $request->quantity;

                    
                if($product->discount_price!=null){

                    $cart->price=$product->discount_price * $cart->quantity;
                }
                else {
                            $cart->price=$product->price * $cart->quantity;
                }

                    $cart->save();

                    

                    return redirect()->back();  

                    
                }

                else{
                    
                    $cart=new cart();

                $cart->name=$user->name;
                $cart->email=$user->email;
                $cart->phone=$user->phone;
                $cart->address=$user->address;
                $cart->user_id=$user->id;


                $cart->product_title=$product->title;

                if($product->discount_price!=null){

                    $cart->price=$product->discount_price * $request->quantity;
                }
                else {
                            $cart->price=$product->price * $request->quantity;
                }

                $cart->quantity=$request->quantity;
                $cart->price=$product->price;
                $cart->image=$product->image;
                $cart->Product_id=$product->id;

                $cart->quantity=$request->stock;


                $cart->save();

                Alert::success('Product Added Successfully','We Have Added Product to your Cart'); 
                return redirect()->back();
                }
               
                
       }
                else{
                     return redirect('login');
                    }
     }



            public function showcrt(){


                    

                    if (Auth::id()){

                        $id=Auth::user()->id;

                        $cart=Cart::where('user_id','=',$id)->get();


                         return view('home.showcrt',compact('cart'));
                    }

                    else{

                        return redirect('login');
                    }

                
                    
            }



            public function remove_cart($id){

                $cart=Cart::find($id);

                

                $cart->delete();

                Alert::success('Product Removed Successfully');

                return redirect()->back();

                
            }
            
            

            public function cash_order(){


                $user=Auth::user();

                $userid = $user->id;

                $data = Cart::where('user_id', '=', $userid)->get();

                foreach($data as $data){

                    $order = new Order();

                    $order->name=$data->name;
                    $order->email=$data->email;
                    $order->phone=$data->phone;
                    $order->address=$data->address;
                    $order->user_id=$data->user_id;
                    $order->product_title=$data->product_title;
                    $order->quantity=$data->quantity;
                    $order->price=$data->price;
                    $order->image=$data->image;
                    $order->product_id=$data->Product_id;
                    $order->payment_status = 'cash on delivery';
                    $order->delivery_status= 'processing';

                    $order->save();

                    $cart_id=$data->id;

                    $cart = Cart::find($cart_id);

                    $cart->delete();
                   
                }

                return redirect()->back();
            }



            public function show_order(){

                if(Auth::id()){

                    $user= Auth::user();
                    $userid=$user->id;

                    $order=Order::where('user_id','=',$userid)->get();

                    return view('home.order',compact('order'));
                }
                else {
                    return redirect('login');
                }

            }


          

            public function cancel_order($id){


                $order=Order::find($id);

                $order->delivery_status= 'Canceled ';

                $order->save();

                return redirect()->back();


            }


            public function product_search(Request $request){


                $searchtext=$request->search;

                $product=Product::where('title','LIKE',"%$searchtext%")->orWhere('category','LIKE',"%$searchtext%")->get();

                return view('home.shop',compact('product'));


            }


            


            public function shop(Request $request){

                
                $categories =  Categorie::all();

                $prod = QueryBuilder::for(Product::class)->allowedFilters([
                        
                        AllowedFilter::exact('category', 'category'),

                     ])->get();
            
                   

                return view('home.shop',compact('prod','categories'));
            }

            // public function filter(Request $request){

                   


            //         // //$userid=$user->id;

            //         // //$order=Order::where('user_id','=',$userid)->get();

            //         // $prod=$request->category;
            //         // $data = Product::where('category','=', $prod); 

            //         // dd($data);

            // }
           
            
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}