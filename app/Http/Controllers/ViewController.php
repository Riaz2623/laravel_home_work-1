<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $products;
   public function index()
   {
      return view('home');
   }
   public function series()
   {
       return view('series');
   }
   public function calculator()
   {
       return view('calculator');
   }
   public function password()
   {
       return view('password');
   }
   public function blog()
   {
       $this->products = product::getAllProduct();
       return view('blog',['products'=>$this->products]);
   }
   public function number()
   {
       return view('number');
   }
   public function details($id)
   {
       $this->products =product::getAllProduct();
       foreach ($this->products as $item)
       {
           if($item ['id']==$id)
           {
               return view('details',['data'=>$item]);
           }
       }

   }
}
