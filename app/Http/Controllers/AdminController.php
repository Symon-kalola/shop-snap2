<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Shops;

class AdminController extends Controller
{
     public function addProduct(Request $req)
    {
       $shops = Shops::where('userId',$req->userId)->first(); 
        $product = new Products;
        $product->name = $req->input('name');
        $product->shopId = $shops->id;
        $product->brand = $req->input('brand');
        $product->description = $req->input('description');
          $product->quantity = $req->input('quantity');
        $product->price = $req->input('price');
        
      //  path for storing images
        $prof = $req['profile']->store('images','public');
        $img1 = $req['image1']->store('images','public');
        $img2 = $req['image2']->store('images','public');
        $img3 = $req['image3']->store('images','public');

        $product->profile = $prof;  
        $product->image1 = $img1;  
        $product->image2 = $img2; 
        $product->image3 = $img3; 
        $product->save();
         
      return 'added successfull';
    }
     public function addShop(Request $req)
    {
        $shop = new Shops;
        $shop->name = $req->input('name');
        $shop->userId = $req->input('userId');
        $shop->branch = $req->input('branch');
        $shop->coordY = $req->input('coordY');
        $shop->coordX = $req->input('coordX');
        $shop->description = $req->input('description');
        $shop->openHrs= $req->input('openHrs');
        $shop->closeHrs = $req->input('closeHrs');
        
        
      // path for storing images
        $prof = $req['profile']->store('images','public');
        $img1 = $req['image1']->store('images','public');
        $img2 = $req['image2']->store('images','public');
        $img3 = $req['image3']->store('images','public');

        $shop->profile = $prof;  
        $shop->image1 = $img1;  
        $shop->image2 = $img2; 
        $shop->image3 = $img3; 
        $shop->save();
        return "added successfully";
         
    }
    function getProducts($userId)
    {
      $shops = Shops::where('userId',$userId)->first();
      $products  = Products::where('shopId',$shops->id)->get();
   
      return $products;
      
    }
    function getShops($userId)
    {  
      $shops = Shops::where('userId',$userId)->get();
      return $shops;
    }
}