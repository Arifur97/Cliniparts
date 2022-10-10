<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use App\Category;
use App\Subcategory;
use App\Product;
use App\Slider;
use App\HomePageBanner;
use App\Poster;

class RootController extends Controller
{
    public function __construct()
    {
        $category = Category::all();
        $subcategory = Subcategory::all();
        $slider = Slider::all();
        $leftBanner = HomePageBanner::find(1);
        $rightBanner = HomePageBanner::find(2);
        $product = Product::where('isFeature', '=', 1)->get();
        $poster = Poster::find(1);
        $recentProduct = Product::orderBy('id', 'desc')->limit(10)->get();

        View::share('category', $category);
        View::share('subcategory', $subcategory);
        View::share('slider', $slider);
        View::share('leftBanner', $leftBanner);
        View::share('rightBanner', $rightBanner);
        View::share('product', $product);
        View::share('poster', $poster);
        View::share('recentProduct', $recentProduct);
    }
    public function index() {
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view('home', compact('category', 'subcategory'));
    }

    // product
    public function showSubcategoryShop() {
        $product = Product::all();
        return view('frontend.product.shop', compact('product'));
    }

    public function showProduct($id) {
        $product = Product::findorfail($id);
        return view('frontend.product.single_product', compact('product'));
    }

    // cart
    public function addToCart($id) {
        $cartItem = Product::find($id);
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                $id=> [
                    "title" => $cartItem->title,
                    "qty" => 1,
                    "price" => $cartItem->price,
                    "img" => $cartItem->image1,
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'product added to cart');
        }
        if(isset($card[$id])) {
            $card[$id]['qty']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'product added to cart');
        }
        $cart[$id] = [
            "title" => $cartItem->title,
            "qty" => 1,
            "price" => $cartItem->price,
            "img" => $cartItem->image1,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'product added to cart'); 
    }
    public function updateCartItem(Request $request)
    {
        if($request->id and $request->qty)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function removeCartItem(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
