<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class GuestController extends Controller
{
    //
    public function home(){
        $produits = Product::all(); //recuperer tout les produits de la base de donnees
        $categories = Category::all(); //rcuperer tout les categories de la base de donnees
        return view('guest.home')->with('produits' , $produits)->with('categories' , $categories);
    }
    public function productDetails($id)
    {
      $categories = Category::all();
      $products = Product::where('id', '!=', $id)->get();
       $product= Product::find($id);
      
        return view('guest.product-details')->with('categories' , $categories)->with('product' , $product)->with('products', $products);;
    } 
    public function shop($idcategory)
    {

        $category = Category::find($idcategory);
        $products = $category->products;
        $categories = Category::all();
        return view('guest.shop')->with('categories', $categories)->with('products', $products);
    }
    
    public function search(Request $request)
    {

        $products = Product::where('name', 'LIKE', '%' . $request->keywords . '%')->get();

        $categories = Category::all();
        return view('guest.shop')->with('categories', $categories)->with('products', $products);
    }
    public function shops(){
        $products = Product::all(); //recuperer tout les produits de la base de donnees
        $categories = Category::all(); //rcuperer tout les categories de la base de donnees
        return view('guest.shop')->with('products' , $products)->with('categories' , $categories);
    }
  

    
    
}
