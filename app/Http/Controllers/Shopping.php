<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class Shopping extends Controller
{
    
public function index(){

return view('shopping.landingpage');

}



public function Lighting(){

    $product=products::All();
      return view('shopping.Lighting',['product'=>$product]);
    
}

public function productdetails($id){

  $producdetails=DB::table('products')
  ->join('products__details','products.id','=','products__details.id_products')
  ->where('products.id','=',$id)
  ->first();

  return view('shopping.product_details',['prod'=>$producdetails]);
  
}



public function add_to_cart()
    {
      $count=session::get('counter');
      $count++;
      session::put('counter',$count);
      return redirect()->route('Lighting');
      return view('shopping.Lighting');

    }










}
