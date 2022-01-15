<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Product;
use Illuminate\Support\Facades\Auth;



use App\Contact as aliasContact;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);

        return view('/index',[
            'products' => $products
        ]);
    }

  /*      public function products()
    {
        $products = Product::all();

        return view('/products',[
            'products' => $products
        ]);
    }*/


  /*  public function category()
    {

        $products = Product::all();


        return view('/category', ['products' => $products]);
    }*/


    public function product(Request $request)
    {
        $product = Product::query()->where(['id' => $request->id])->get();

        $sessionID = Session::getId();

        \Cart::session($sessionID);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        return view('/product', [
             'product' => $product,
             'cart' => $cart,
             'sum' => $sum
        ]);
    }

    public function addCart(Request $request)
    {
        $product = Product::query()->where(['id' => $request->id])->first();

        $sessionID = Session::getId();

        \Cart::session($sessionID)->add([

            'id' => $product -> id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
                'img_1' => $product -> img_1,
            ],
        ]);

        $cart = \Cart::getContent();

        return redirect() -> back();
    }

     public function checkout(Request $request)
     {
         $user = Auth::user();

         /*dd($user);*/

         $product = Product::query()->where(['id' => $request->id])->get();

         $sessionID = Session::getId();

         \Cart::session($sessionID);

         $cart = \Cart::getContent();

         $sum = \Cart::getTotal('price');

         $messageSuccessOrder = \session('successOrder');

         if (!empty($messageSuccessOrder)){

             return view('/checkout',[
                 'product' => $product,
                 'cart' => $cart,
                 'sum' => $sum,
                 'user' => $user
             ])->with('messageSuccessOrder', $messageSuccessOrder);
         }

         return view('/checkout',[
             'product' => $product,
            'cart' => $cart,
             'sum' => $sum,
             'user' => $user
             ])->with('messageSuccessOrder', $messageSuccessOrder);
     }

    public function cart(Request $request)
    {


        $product = Product::query()->where(['id' => $request->id])->get();

        $sessionID = Session::getId();

        \Cart::session($sessionID);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        return view('/cart',[

            'product' => $product,

            'cart' => $cart,

            'sum' => $sum

        ]);
    }

    public function cart_check(Request $request){
        $valid = $request->validate([
            'email_phone' => 'required|min:|max:20',

            'message' => 'required|min:15|max:200'
        ]);

        $review = new Contact();
        $review->email_phone = $request->input('email_phone');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('/product');

    }

    public function makeOrder(Request $request)
    {
       /* dd($request);*/
        $valid = $request->validate([
            'phone' => 'required|min:5|max:20',

            'address' => 'required|min:5|max:30',

            'city' => 'required|min:2|max:20',

            'zip' => 'required|min:3|max:20'

        ]);

        $user = Auth::user();

        $sessionID = Session::getId();

        \Cart::session($sessionID);

        $cart = \Cart::getContent();

        $sum = \Cart::getTotal('price');

        $order = new Order();
       /* dd($request);*/


        $order->user_id = $user->id;

        $order->cart_data = $order->setCartDataAttribute($cart);

        $order->total_sum = $sum;

        $order->name = $request->name;

        $order->phone = $request->phone;

        $order->email = $request->email;

        $order->address = $request->address;

        $order->city = $request->city;

        $order->zip = $request->zip;

         if($order->save()){

             \Cart::clear();

             Session::flash('successOrder', "Order created successfully");

             return back();
         }

        Session::flash('errorOrder', "something went wrong");

        return back();

    }

    public function removeItemCart($id)
    {
        $user = Auth::user();

        $sessionID = Session::getId();

        \Cart::session($sessionID);

       \Cart::remove($id);

        return redirect()->back();
    }
}
