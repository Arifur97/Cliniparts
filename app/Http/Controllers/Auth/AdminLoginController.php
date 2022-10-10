<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use View;
use App\Category;
use App\Subcategory;

class AdminLoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin');

        $category = Category::all();
        $subcategory = Subcategory::all();
        View::share('category', $category);
        View::share('subcategory', $subcategory);
    }

    public function showLoginForm() {
        return view('auth.admin.admin_login');
    }

    public function login(Request $request) {
        // validate the form
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //attemp to login

        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
        // if login successful then redirect to page
        // if unsuccessful then redirect back
    }
}
