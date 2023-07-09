<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        return view('product',['products'=>$data]);

    }
    public function detail($id){
        $data= Product::find($id);
        return view('detial',['product'=>$data]);
    }
    public function search(Request $req){
        // return $req->input();
       $data =Product::
      where('name','like','%'.$req->input('query').'%')
      ->get();
      return view('search',['products'=>$data]);
    }
    static function cartItem(){
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id']; 
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
           
        }else{
            return redirect('/login');
        }
    }
    public function cartList(){
        $user_id=Session::get('user')['id'];
      $data=  DB::table('cart')
        ->join('product','cart.product_id','product.id')
        ->select('product.*','cart.id as cart_id')
        ->where('cart.user_id',$user_id)
        ->get();
        return view('cartlist',['products'=>$data]);
        
    }
    public function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
