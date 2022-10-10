<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Category;
use App\Subcategory;
use App\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $category = Category::all();
        $subcategory = Subcategory::all();
        $slider = Slider::all();
        $leftBanner = HomePageBanner::find(1);
        $rightBanner = HomePageBanner::find(2);
        $product = Product::where('isFeature', '=', 1)->get();

        View::share('category', $category);
        View::share('subcategory', $subcategory);
        View::share('slider', $slider);
        View::share('leftBanner', $leftBanner);
        View::share('rightBanner', $rightBanner);
        View::share('product', $product);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard() {
        return view('frontend.user.dashboard');
    }
}
