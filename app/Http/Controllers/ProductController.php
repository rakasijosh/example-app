<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Product;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //

   public function index(Request $req){
     if($req->isMethod('post')){
       $req->validate([
         'pname'=>'required|min:4',
         'pprice'=>'required',
         'pgallery'=>'required'
       ]);

       $product = New Product;
       $product->pname = $req->pname;
       $product->pprice = $req->pprice;
       $product->pgallery ='img/shop/' . $req->pgallery;
       $product->save();
     }

     
     return view('pages.addproduct');
    }

  //  public function load(Request $req){
  //     $product = New Product;
  //     $product->pname = $req->pname;
  //     $product->pprice = $req->pprice;
  //     $product->pgallery ='img/' . $req->pgallery;
  //     $product->save();
  //     // return $req->input();
  //   }

  public function out(){
    $data =  Product::all();

    return view('pages.check',['product'=>$data]);
  }
}
