<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;
class AdminController extends Controller
{
    //

    public function category(){

        $data=categorie::all();
        return view('admin.category', compact('data'));

    }
    public function add_category(Request $request){

            $data=new Categorie;

            $data->category_name = $request->category;

            $data->save();

            return redirect()->back()->with('message','Category Added Successfully');

    }

    public function edit_category(String $id){

        $editcat = Categorie::find($id);

        return view('admin.category.editcategory',compact('editcat'));
        
        
    }

    public function update_category(Request $request, Categorie $editcat){
        
        $validate = $request->validate([

            'category_name' => 'required',
        ]);
        
        
        $editcat->update($validate);
        
      

        return redirect()->back()->with('message','Category Updated Successfully');


        
    }



    
    public function delete_category($id){

        $data =categorie::where('id',$id)->first();

        $data->delete();

        return redirect()->back()->with('message','Category Deleted Successfully');
    }



    //product

    public function view_product(){

        $category =  Categorie::all();
        return View('admin.product',compact('category'));
    }

    public function add_product(Request $request){

       

        $product = new Product;

        $product->title = $request->p_name;
        $product->description = $request->desc;
        $product->price = $request->p_price;
        $product->quantity = $request->qte;
        $product->category = $request->ctg;
        $product->discount_price = $request->discount;

        

        
        $image = $request->image;
        
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);

        $product->image = $imagename;


        $product->save();

        return redirect()->back()->with('message','product added successfully');


    }

    //show product

    public function show_product(){

        $product =  Product::all();
        return view('admin.showproduct' ,compact('product'));
    }

    //delete product
    public function delete_product($id){

        

        $id->delete();

        return redirect()->back();
    }

    //update product

    public function update_product($id){

        $product=product::find($id);

        $category=Categorie::all();

        return view('admin.updateproduct' , compact('product','category'));
    }
    public function update_product_confirm(Request $request,$id){

        $product=product::find($id);
        $product->title = $request->p_name;
        $product->description = $request->desc;
        $product->price = $request->p_price;
        $product->quantity = $request->qte;
        $product->category = $request->ctg;
        $product->discount_price = $request->discount;


        $image = $request->image;

        if($image){

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);

        $product->image = $imagename;

    }

        $product->save();

        return redirect()->back();

    }


    public function order(){


        $order = Order::All();

        


        return view('admin.order',compact('order'));
    }


    public function delivred($id){

        $ord = Order::find($id);

        $ord->delivery_status="Delivred";

        $ord->payment_status="Paid";

        $ord->save();

         return redirect()->back();

    }

    public function searchdata(Request $request){


            $searchtext = $request->search;

            $order=Order::where('name','LIKE',"%$searchtext%")->orWhere('phone','LIKE',"%$searchtext%")->orWhere('product_title','LIKE',"%$searchtext%")->get();

            return view('admin.order',compact('order'));
    }

    public function userlist(){

        $user =  User::all();
        return view('admin.userlist' ,compact('user'));
    }
    public function userOnlineStatus()
    {
        $users = User::all();
        
        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo $user->name . " is online. Last seen: " . Carbon::parse($user->status)->diffForHumans() . " <br>";
            else
                echo $user->name . " is offline. Last seen: " . Carbon::parse($user->status)->diffForHumans() . " <br>";
        }
    }


   
}