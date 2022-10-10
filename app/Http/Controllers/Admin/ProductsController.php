<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use View;
use App\Category;
use App\Subcategory;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

        $category = Category::all();
        $subcategory = Subcategory::all();
        View::share('category', $category);
        View::share('subcategory', $subcategory);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function products() {
        $products = Product::paginate(10);
        return view('backend.products.products', compact('products'));
    }
    public function addProduct() {
        return view('backend.products.addProduct');
    }
    public function storeProduct(Request $request) {
        $request->validate([
            'title' => 'required',
            'isFeature' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'specification' => 'required',
            'image1' => 'required | mimes:jpeg,jpg,png',
            'image2' => 'mimes:jpeg,jpg,png',
            'image3' => 'mimes:jpeg,jpg,png',
            'image4' => 'mimes:jpeg,jpg,png',
        ]);

        $product = new Product();
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->isFeature = $request->isFeature;
        $product->title = $request->title;
        $product->name = $request->name;
        $product->old_price = $request->oldPrice;
        $product->price = $request->price;
        $product->short_desc = $request->shortDesc;
        $product->product_code = $request->product_code;
        $product->desc = $request->desc;
        $product->specification = $request->specification;

        $img1 = $request->image1;
        $img2 = $request->image2;
        $img3 = $request->image3;
        $img4 = $request->image4;
        if($img1) {
            $upload_path = 'frontend/images/product/';
            $img1_name = str_random(5);
            $ext1 = strtolower($img1->getClientOriginalExtension());
            $img1_full_name = $img1_name.'.'.$ext1;
            $img1_url = $upload_path.$img1_full_name;
            $success1 = $img1->move($upload_path, $img1_full_name);
            $product->image1 = $img1_url;
            if($img2) {
                $img2_name = str_random(5);
                $ext2 = strtolower($img2->getClientOriginalExtension());
                $img2_full_name = $img2_name.'.'.$ext2;
                $img2_url = $upload_path.$img2_full_name;
                $success2 = $img2->move($upload_path, $img2_full_name);
                $product->image2 = $img2_url;
            }
            if($img3) {
                $img3_name = str_random(5);
                $ext3 = strtolower($img3->getClientOriginalExtension());
                $img3_full_name = $img3_name.'.'.$ext3;
                $img3_url = $upload_path.$img2_full_name;
                $success3 = $img3->move($upload_path, $img3_full_name);
                $product->image3 = $img3_url;
            }
            if($img4) {
                $img4_name = str_random(5);
                $ext4 = strtolower($img4->getClientOriginalExtension());
                $img4_full_name = $img4_name.'.'.$ext4;
                $img4_url = $upload_path.$img4_full_name;
                $success4 = $img4->move($upload_path, $img4_full_name);
                $product->image4 = $img4_url;
            }
            $product->save();
            return redirect()->route('admin.products');
        }
        else {
            $product->save();
            return redirect()->route('admin.products');
        }

    }

    public function viewProduct($id) {
        $product = Product::findorfail($id);
        return view('backend.products.viewProduct', compact('product'));
    }

    public function editProduct($id) {
        $product = Product::findorfail($id);
        return view('backend.products.editProduct', compact('product'));
    }

    public function updateProduct(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'isFeature' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'specification' => 'required',
            'image1' => 'mimes:jpeg,jpg,png',
            'image2' => 'mimes:jpeg,jpg,png',
            'image3' => 'mimes:jpeg,jpg,png',
            'image4' => 'mimes:jpeg,jpg,png',
        ]);

        $product = Product::findorfail($id);
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->isFeature = $request->isFeature;
        $product->title = $request->title;
        $product->name = $request->name;
        $product->old_price = $request->oldPrice;
        $product->price = $request->price;
        $product->short_desc = $request->shortDesc;
        $product->product_code = $request->product_code;
        $product->desc = $request->desc;
        $product->specification = $request->specification;

        $img1 = $request->image1;
        $img2 = $request->image2;
        $img3 = $request->image3;
        $img4 = $request->image4;
        
        $upload_path = 'frontend/images/product/';
        if($img1) {
            $img1_name = str_random(5);
            $ext1 = strtolower($img1->getClientOriginalExtension());
            $img1_full_name = $img1_name.'.'.$ext1;
            $img1_url = $upload_path.$img1_full_name;
            $success1 = $img1->move($upload_path, $img1_full_name);
            $product->image1 = $img1_url;
        }
        if($img2) {
            $img2_name = str_random(5);
            $ext2 = strtolower($img2->getClientOriginalExtension());
            $img2_full_name = $img2_name.'.'.$ext2;
            $img2_url = $upload_path.$img2_full_name;
            $success2 = $img2->move($upload_path, $img2_full_name);
            $product->image2 = $img2_url;
        }
        if($img3) {
            $img3_name = str_random(5);
            $ext3 = strtolower($img3->getClientOriginalExtension());
            $img3_full_name = $img3_name.'.'.$ext3;
            $img3_url = $upload_path.$img2_full_name;
            $success3 = $img3->move($upload_path, $img3_full_name);
            $product->image3 = $img3_url;
        }
        if($img4) {
            $img4_name = str_random(5);
            $ext4 = strtolower($img4->getClientOriginalExtension());
            $img4_full_name = $img4_name.'.'.$ext4;
            $img4_url = $upload_path.$img4_full_name;
            $success4 = $img4->move($upload_path, $img4_full_name);
            $product->image4 = $img4_url;
        }
        else {
            $product->update();
            return redirect()->route('admin.products');
        }
        $product->update();
        return redirect()->route('admin.products');
    }

    public function deleteProduct($id) {
        $product = Product::findorfail($id);
        $productImg1 = $product->image1;
        $productImg2 = $product->image2;
        $productImg3 = $product->image3;
        $productImg4 = $product->image4;
        @unlink($productImg1);
        @unlink($productImg2);
        @unlink($productImg3);
        @unlink($productImg4);
        $product->delete();
        return Redirect()->back();
    }



    // front end product
    public function showSubcategoryShop() {
        $product = Product::all();
        return view('frontend.product.shop', compact('product'));
    }

    public function showProduct($id) {
        $product = Product::findorfail($id);
        return view('frontend.product.single_product', compact('product'));
    }

    // cart
    public function addToCart(Request $request, $id) {
        $product = Product::findorfail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->back();
    }
    public function removeCartProduct($id) {

    }
}
