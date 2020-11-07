<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index(){
   	return view ('index');
   }
    public function cart(){
   	return view ('cart');
}
 public function checkout(){
   	return view ('checkout');
}
public function contact(){
   	return view ('contact');
}
public function my_account(){
   	return view ('my-account');
}
public function product_detail(){
   	return view (' product-detail');
}
public function product_list(){
   	return view (' product-list');
}
public function log(){
   	return view (' log');
}
public function wishlist(){
   	return view ('wishlist');
}
}
