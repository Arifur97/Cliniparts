<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class CategoryController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function category() {
        $category = Category::all();
        $subcategory = Subcategory::paginate(10);
        return view('backend.category.category', compact('subcategory', 'category'));
    }
    public function categoryStore(Request $request) {
        $validateData = $request->validate([
            'category' => 'required',
        ]);
        $category = new Category();
        $category->category = $request->category;
        $category->save();
        return redirect()->back();
    }
    public function subcategoryStore(Request $request) {
        $validateData = $request->validate([
            'subcategory' => 'required',
        ]);
        $subcategory = new Subcategory();
        $subcategory->category_id = $request->category;
        $subcategory->subcategory = $request->subcategory;
        $subcategory->save();
        return redirect()->back();
    }
    public function categoryDelete($id) {
        $categoryDelete = Subcategory::findorfail($id);
        $categoryDelete->delete();
        return Redirect()->back();
    }
}
